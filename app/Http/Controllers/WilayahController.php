<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\TimeUpdateTable;

class WilayahController extends Controller
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
    }

    // public function getKecamatanKelurahanKelompok(Request $request){
    //     try {
    //         $data = Kecamatan::with(['tb_kelurahan', 'tb_kelurahan.tb_kelompok'])->select('*')->get();
    //     } catch (\Exception $exception) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Get Data Kecamatan-Kelurahan-Kelompok Gagal!',
    //             'errormsg' => $exception->getMessage(),
    //             'data' => ''
    //         ], 404, $this->headers);
    //     }

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Get Data Kecamatan-Kelurahan-Kelompok Success!',
    //         'data' => $data
    //     ], 200, $this->headers);
    // }

    // Kelurahan
    //
    //
    
    public function createKelurahan(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $data = Kelurahan::create([
                    'nama_kelurahan' => $request->input('nama_kelurahan'),
                    'kecamatan_id' => $request->input('kecamatan_id'),
                ]);
                
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelurahan')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Create Data Kelurahan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 400, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Create Data Kelurahan Success!',
                'data' => $data
            ], 201, $this->headers);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
                'data' => ''
            ], 401, $this->headers);
        }
    }
    
    public function deleteKelurahan(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $penyuluhan = Kelurahan::findOrFail($request->input('kelurahan_id'));
                $penyuluhan->delete();
    
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelurahan')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Delete Data Kelurahan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Kelurahan Success!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
                'data' => ''
            ], 401, $this->headers);
        }
    }
    public function getKelurahan(Request $request){
        $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelurahan')->firstOrFail();
        if($timeUpdateTable->updated_at.'' == $request->input('updated_at')){
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang di Update!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            try {
                $data = Kelurahan::select('*')->get();
            } catch (\Exception $exception) {
                return response()->json([
                    'success' => false,
                    'message' => 'Get Data Kelurahan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Get Data Kecamatan Success!',
                'data' => [
                    'last_update' => $timeUpdateTable->updated_at.'',
                    'tb_kelurahan' => $data
                ]
            ], 200, $this->headers);
        }
    }

    // Kecamatan
    //
    //
    
    public function createKecamatan(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $data = Kecamatan::create([
                    'nama_kecamatan' => $request->input('nama_kecamatan'),
                ]);
                
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kecamatan')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Create Data Kecamatan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 400, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Create Data Kecamatan Success!',
                'data' => $data
            ], 201, $this->headers);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
                'data' => ''
            ], 401, $this->headers);
        }
    }
    
    public function deleteKecamatan(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $penyuluhan = Kecamatan::findOrFail($request->input('kecamatan_id'));
                $penyuluhan->delete();
    
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kecamatan')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Delete Data Kecamatan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Kecamatan Success!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
                'data' => ''
            ], 401, $this->headers);
        }
    }

    public function getKecamatan(Request $request){
        $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kecamatan')->firstOrFail();
        if($timeUpdateTable->updated_at.'' == $request->input('updated_at')){
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang di Update!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            try {
                $data = Kecamatan::select('*')->get();
            } catch (\Exception $exception) {
                return response()->json([
                    'success' => false,
                    'message' => 'Get Data Kecamatan Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Get Data Kecamatan Success!',
                'data' => [
                    'last_update' => $timeUpdateTable->updated_at.'',
                    'tb_kecamatan' => $data
                ]
            ], 200, $this->headers);
        }
    }
}
