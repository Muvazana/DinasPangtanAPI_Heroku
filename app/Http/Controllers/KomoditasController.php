<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Komoditas;
use App\Models\TimeUpdateTable;

class KomoditasController extends Controller
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
    
    public function createKomoditas(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $data = Komoditas::create([
                    'type' => $request->input('type'),
                    'nama_komoditas' => $request->input('nama_komoditas'),
                ]);
                
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_komoditas')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Create Data Komoditas Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 400, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Create Data Komoditas Success!',
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
    
    public function deleteKomoditas(Request $request){
        if(Auth::user()->role == 'Admin'){
            DB::beginTransaction();
            try{
                $penyuluhan = Komoditas::findOrFail($request->input('kelurahan_id'));
                $penyuluhan->delete();
    
                $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_kelurahan')->firstOrFail();
                $timeUpdateTable->touch();
                DB::commit();
            }catch(\Exception $exception){
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'message' => 'Delete Data Komoditas Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Komoditas Success!',
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
    
    public function getKomoditas(Request $request){
        $timeUpdateTable = TimeUpdateTable::where('table_name', 'tb_komoditas')->firstOrFail();
        if($timeUpdateTable->updated_at.'' == $request->input('updated_at')){
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data yang di Update!',
                'data' => ''
            ], 200, $this->headers);
        }else{
            try {
                $data = Komoditas::select('*')->get();
            } catch (\Exception $exception) {
                return response()->json([
                    'success' => false,
                    'message' => 'Get Data Komoditas Gagal!',
                    'errormsg' => $exception->getMessage(),
                    'data' => ''
                ], 404, $this->headers);
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Get Data Komoditas Success!',
                'data' => [
                    'last_update' => $timeUpdateTable->updated_at.'',
                    'tb_komoditas' => $data
                ]
            ], 200, $this->headers);
        }
    }
}
