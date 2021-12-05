<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Audit;

class AuditController extends Controller
{

    private $headers = [
        'Content-Type' => 'application/json'
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // Auth::user()->touch();
    }

    public function create(Request $request){
        // Log::info($request);
        DB::beginTransaction();
        try{
            $auditCreated = Audit::create([
                'user_id' => Auth::user()->user_id,
                'kelurahan_id' => $request->input('kelurahan_id'),
                'date' => $request->input('date'),
                'kelompok_id' => $request->input('kelompok_id'),
                'date_tanam' => $request->input('date_tanam'),
                'luas_vol_tanam' => $request->input('luas_vol_tanam'),
                'date_panen' => $request->input('date_panen'),
                'luas_vol_panen' => $request->input('luas_vol_panen'),
                'provitas_panen' => $request->input('provitas_panen'),
                'produksi_panen' => $request->input('produksi_panen'),
                'date_pengolahan' => $request->input('date_pengolahan'),
                'vol_pengolahan' => $request->input('vol_pengolahan'),
                'total_nilai_harga' => $request->input('total_nilai_harga'),
                'keterangan' => $request->input('keterangan')
            ]);

            $list_komoditas = $request->input('list_komoditas');
            $list_komoditas = array_map(function($value) {
                return intval($value);
            }, $list_komoditas);

            Audit::with('tb_komoditas')
            ->where('user_id', Auth::user()->user_id)
            ->findOrFail($auditCreated->audit_id)
            ->tb_komoditas()->attach($list_komoditas);

            $data = Audit::with('tb_komoditas')
            ->where('user_id', Auth::user()->user_id)
            ->findOrFail($auditCreated->audit_id);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Create Data Audit Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 400, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Create Data Audit Success!',
            'data' => $data
        ], 200, $this->headers);
    }

    public function update(Request $request){
        DB::beginTransaction();
        try{
            $data = Audit::with('tb_komoditas')->where('user_id', Auth::user()->user_id)
            ->findOrFail($request->input('audit_id'));
            $data->update([
                'kelurahan_id' => $request->input('kelurahan_id'),
                'date' => $request->input('date'),
                'kelompok_id' => $request->input('kelompok_id'),
                'date_tanam' => $request->input('date_tanam'),
                'luas_vol_tanam' => $request->input('luas_vol_tanam'),
                'date_panen' => $request->input('date_panen'),
                'luas_vol_panen' => $request->input('luas_vol_panen'),
                'provitas_panen' => $request->input('provitas_panen'),
                'produksi_panen' => $request->input('produksi_panen'),
                'date_pengolahan' => $request->input('date_pengolahan'),
                'vol_pengolahan' => $request->input('vol_pengolahan'),
                'total_nilai_harga' => $request->input('total_nilai_harga'),
                'keterangan' => $request->input('keterangan')
            ]);

            $list_komoditas = $request->input('list_komoditas');
            $list_komoditas = array_map(function($value) {
                return intval($value);
            }, $list_komoditas);
            $data->tb_komoditas()->sync($list_komoditas);
            $data = $data->with('tb_komoditas')->get();
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Update Data Audit Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Update Data Audit Success!',
            'data' => $data
        ], 200, $this->headers);
    }

    public function delete(Request $request){
        DB::beginTransaction();
        try{
            $data = Audit::with('tb_komoditas')->where('user_id', Auth::user()->user_id)
            ->findOrFail($request->input('audit_id'));
            $data->tb_komoditas()->detach();
            $data->delete();
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Delete Data Audit Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Delete Data Audit Success!',
            'data' => ''
        ], 200, $this->headers);
    }

    public function show(Request $request){

        try {
            if(Auth::user()->role == 'Member'){
                $data = Audit::with(['tb_kelompok', 'tb_kelurahan', 'tb_kelurahan.tb_kecamatan', 'tb_komoditas'])->select('*')->where('user_id', Auth::user()->user_id)->get();
            }else if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Guest'){
                $data = Audit::with(['tb_kelompok', 'tb_kelurahan', 'tb_kelurahan.tb_kecamatan', 'tb_komoditas'])->select('*')->get();
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized',
                    'data' => ''
                ], 401, $this->headers);
            }
            // $data = Audit::with(['tb_kelompok', 'tb_kelurahan', 'tb_kelurahan.tb_kecamatan', 'tb_komoditas'])->select('*')->where('user_id', Auth::user()->user_id);
            // if($request->has('bulan')){
            //     $data->whereMonth('date', '=', $request->input('bulan'));
            // }
            // if($request->has('tahun')){
            //     $data->whereYear('date', '=', $request->input('tahun'));
            // }
            // if($request->has('wilayah')){
            //     $wilayah = explode('-', $request->input('wilayah'));
            //     if(!empty($wilayah[0])){
            //         $data->where('kelurahan_id', '=', $wilayah[0]);
            //     }else{
            //         $kecamatan_id = $wilayah[1];
            //         $data->whereHas('tb_kelurahan', function ($q) use ($kecamatan_id) {
            //             $q->where('kecamatan_id', $kecamatan_id);
            //         });
            //     }
            // }
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Get Data Audit Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Data Audit Success!',
            'data' => $data
        ], 200, $this->headers);
    }
}
