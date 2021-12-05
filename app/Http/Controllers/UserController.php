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

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $headers = [
        'Content-Type' => 'application/json'
    ];
    private $folder_name = 'files/user_images';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changePassword(Request $request){
        $user = Auth::user();
        if ($request->has('ver_token') || $user->status == "unverified"){
            if ($user->ver_token == $request->input('ver_token') || $user->status == "unverified") {
                $new_password = Hash::make($request->input('password'));

                if($user->status == "unverified"){
                    $user->update([
                        'password' => $new_password,
                        'ver_token' => null,
                        'status' => 'verified'
                    ]);
                }else{
                    $user->update([
                        'password' => $new_password,
                        'ver_token' => null
                    ]);
                }

                if ($user->image != null) $user->image = url($this->folder_name . '/' . $user->image);
                return response()->json([
                    'success' => true,
                    'message' => 'Change password Success!',
                    'data' => [
                        'user' => $user,
                        'api_token' => $user->api_token
                    ]
                ], 200, $this->headers);
            }

            return response()->json([
                'success' => false,
                'message' => 'Change Password Fail! Token tidak cocok!',
                'data' => ''
            ], 400, $this->headers);
        }else{
            $digits = 6;
            $ver_token = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);;
            
            $user->update([
                'ver_token' => $ver_token
            ]);

            $data = array('name' => $user->name, 'ver_token' => $ver_token);
            Mail::send('mail', $data, function ($message) use ($user) {
                $message->to('muvazana@gmail.com', $user->name)->subject('Login Token');
            });
            return response()->json([
                'success' => true,
                'message' => 'Token Telah dikirim ke '.$user->email,
                'data' => ''
            ], 200, $this->headers);
        }
    }
}
