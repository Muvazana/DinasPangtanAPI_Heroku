<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Kelompok;
use App\Models\TimeUpdateTable;

class KelompokController extends Controller
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
    
    public function createKelompok(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $data = Kelompok::create([
                    'nama_kelompok' => $request->input('nama_kelompok'),
                    'rt_rw' => $request->input('rt_rw'),
                    'wilayah_id' => $request->input('wilayah_id'),
                ]);
                
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelompok')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Create Data Kelompok Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 400, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Create Data Kelompok Success!',
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
    
    public function deleteKelompok(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $penyuluhan = Kelompok::findOrFail($request->input('kelompok_id'));
                $penyuluhan->delete();
    
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelompok')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Delete Data Kelompok Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Kelompok Success!',
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
    
    public function getKelompok(Request $request){
        $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelompok')->firstOrFail();
        if($timeUpdateTable->updated_at.'' == $request->input('updated_at')){
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang di Update!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            try {
                $data = Kelompok::select('*')->get();
            } catch (\Exception $exception) {
                return response()->json([
                    'success' => false,
                    'message' => 'Get Data Kelompok Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Get Data Kelompok Success!',
                'data' => [
                    'last_update' => $timeUpdateTable->updated_at.'',
                    'tb_kelompok' => $data
                ]
            ], 200, $this->headers);
        }
    }
}
