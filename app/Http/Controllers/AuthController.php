<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use App\Models\User;

class AuthController extends Controller
{
    private $headers = [
        'Content-Type' => 'application/json'
    ];
    private $folder_name = 'files/user_images';

    public function mail()
    {
        $data = array('name' => "m");
        Mail::send('mail', $data, function ($message) {
            $message->to('muvazana@gmail.com', 'm')->subject('Test Mail from tomorrowas');
            $message->from('tomorrowtoday39@gmail.com', 'Muvazana Tomorrow');
        });
        echo 'Email Sent. Check your inbox.';
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $name = $request->input('name');
        $email = strtolower($request->input('email'));
        $role = $request->input('role');
        $password = Hash::make($request->input('password'));
        $file_name = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_extentions = $file->getClientOriginalExtension();
            $file_name = time() . "_" . $request->input('email') . '.' . $file_extentions;
            $file->move($this->folder_name, $file_name);
        }

        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $register = User::create([
                    'name' => $name,
                    'email' => $email,
                    'image' => $file_name,
                    'password' => $password,
                    'role' => $role
                ]);
            } else {
                $register = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role
                ]);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            $file_path = $this->folder_name . '/' . $file_name;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            return response()->json([
                'success' => false,
                'message' => 'Register Failed!',
                'errormsg' => $exception->getMessage(), //url('/'.$file_path)
                'data' => ''

            ], 400, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Register Success!',
            'data' => $register
        ], 201, $this->headers);
    }

    public function login(Request $request)
    {

        $email = strtolower($request->input('email'));
        $password = $request->input('password');

        try {
            $user = User::where('email', $email)->firstOrFail();
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Login Fail! Username atau Password Salah',
                'data' => ''
            ], 404, $this->headers);
        }

        if (Hash::check($password, $user->password)) {
            if ($request->has('ver_token')) {
                if ($user->ver_token == $request->input('ver_token')) {
                    $api_token = base64_encode(Str::random(40));

                    $user->update([
                        'api_token' => $api_token,
                        'ver_token' => null
                    ]);

                    if ($user->image != null) $user->image = url($this->folder_name . '/' . $user->image);
                    return response()->json([
                        'success' => true,
                        'message' => 'Login Success!',
                        'data' => [
                            'user' => $user,
                            'api_token' => $api_token
                        ]
                    ], 200, $this->headers);
                }

                return response()->json([
                    'success' => false,
                    'message' => 'Login Fail! Token tidak cocok atau kadaluarsa!',
                    'data' => ''
                ], 400, $this->headers);
            } else {
                $digits = 6;
                $ver_token = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);;
                
                $user->update([
                    'ver_token' => $ver_token
                ]);

                $data = array('name' => $user->name, 'ver_token' => $ver_token);
                Mail::send('mail', $data, function ($message) use ($user) {
                    $message->to($user->email, $user->name)->subject('Login Token');
                });
                return response()->json([
                    'success' => true,
                    'message' => 'Token Telah dikirim ke '.$user->email,
                    'data' => ''
                ], 200, $this->headers);
            }
            // if (is_null($user->api_token) || (Carbon::now()->diffInMinutes($user->updated_at) > 30)) {
            // } else {
            //     if ($user->api_token == $request->input('api_token')) {
            //         $user->touch();
            //         if ($user->image != null) $user->image = url($this->folder_name . '/' . $user->image);
            //         return response()->json([
            //             'success' => true,
            //             'message' => 'Login Success!',
            //             'data' => [
            //                 'user' => $user,
            //                 'api_token' => $user->api_token
            //             ]
            //         ], 200, $this->headers);
            //     } else {
            //         return response()->json([
            //             'success' => true,
            //             'message' => 'Login Fail! User telah login!',
            //             'data' => ''
            //         ], 400, $this->headers);
            //     }
            // }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Fail! Username atau Password Salah',
                'data' => ''
            ], 404, $this->headers);
        }
    }

    public function extendLoginTime(Request $request)
    {
        if ($request->input('api_token')) {
            $user = User::where('api_token', $request->input('api_token'))->first();
            if ($user != null) {
                if (Carbon::now()->diffInMinutes($user->updated_at) <= 30) {
                    $user->touch();
                    return response()->json([
                        'success' => true,
                        'message' => 'Extend expired login time Berhasil!',
                        'data' => ''
                    ], 200, $this->headers);
                }
                return response()->json([
                    'success' => false,
                    'message' => 'Token Login expired!',
                    'data' => ''
                ], 200, $this->headers);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Token tidak temukan!',
            'data' => ''
        ], 404, $this->headers);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->update([
                'api_token' => null,
                'ver_token' => null
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Logout Success!',
                'data' => [
                    'user' => $user,
                    'api_token' => null
                ]
            ], 200, $this->headers);
        }

        return response()->json([
            'success' => false,
            'message' => 'Logout Fail!',
            'data' => ''
        ], 400, $this->headers);
    }
}
