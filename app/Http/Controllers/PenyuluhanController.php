<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Penyuluhan;

class PenyuluhanController extends Controller
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
        DB::beginTransaction();
        try{
            $data = Penyuluhan::create([
                'user_id' => Auth::user()->user_id,
                'kelurahan_id' => $request->input('kelurahan_id'),
                'date' => $request->input('date'),
                'kelompok_id' => $request->input('kelompok_id'),
                'jumlah_anggota' => $request->input('jumlah_anggota'),
                'kegiatan' => $request->input('kegiatan'),
                'teknis' => $request->input('teknis'),
                'sosial' => $request->input('sosial'),
                'ekonomi' => $request->input('ekonomi'),
                'masalah' => $request->input('masalah'),
                'pemecahan_masalah' => $request->input('pemecahan_masalah')
            ]);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Create Data Penyuluhan Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 400, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Create Data Penyuluhan Success!',
            'data' => $data
        ], 200, $this->headers);
    }

    public function update(Request $request){
        DB::beginTransaction();
        try{
            $data = Penyuluhan::where('user_id', Auth::user()->user_id)
            ->findOrFail($request->input('penyuluhan_id'));
            $data->update([
                'kelurahan_id' => $request->input('kelurahan_id'),
                'date' => $request->input('date'),
                'kelompok_id' => $request->input('kelompok_id'),
                'jumlah_anggota' => $request->input('jumlah_anggota'),
                'kegiatan' => $request->input('kegiatan'),
                'teknis' => $request->input('teknis'),
                'sosial' => $request->input('sosial'),
                'ekonomi' => $request->input('ekonomi'),
                'masalah' => $request->input('masalah'),
                'pemecahan_masalah' => $request->input('pemecahan_masalah')
            ]);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Update Data Penyuluhan Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Update Data Penyuluhan Success!',
            'data' => $data
        ], 200, $this->headers);
    }

    public function delete(Request $request){
        DB::beginTransaction();
        try{
            $penyuluhan = Penyuluhan::where('user_id', Auth::user()->user_id)
            ->findOrFail($request->input('penyuluhan_id'));
            $penyuluhan->delete();
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Delete Data Penyuluhan Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }
        
        return response()->json([
            'success' => true,
            'message' => 'Delete Data Penyuluhan Success!',
            'data' => ''
        ], 200, $this->headers);
    }

    public function show(Request $request){
        try {
            if(Auth::user()->role == 'Member'){
                $data = Penyuluhan::with(['tb_kelompok', 'tb_kelurahan', 'tb_kelurahan.tb_kecamatan'])->select('*')->where('user_id', Auth::user()->user_id)->get();
            }else if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Guest'){
                $data = Penyuluhan::with(['tb_kelompok', 'tb_kelurahan', 'tb_kelurahan.tb_kecamatan'])->select('*')->get();
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized',
                    'data' => ''
                ], 401, $this->headers);
            }
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Get Data Penyuluhan Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Data Penyuluhan Success!',
            'data' => $data
        ], 200, $this->headers);
    }
    // public function show(Request $request){

    //     try {
    //         $data = Penyuluhan::select('*')->where('user_id', Auth::user()->user_id);
    //         if($request->has('bulan')){
    //             $data->whereMonth('date', '=', $request->input('bulan'));
    //         }
    //         if($request->has('tahun')){
    //             $data->whereYear('date', '=', $request->input('tahun'));
    //         }
    //         if($request->has('wilayah')){
    //             //explode('kelurahan-kecamatan')
    //             $wilayah = explode('-', $request->input('wilayah'));
    //             if(!empty($wilayah[0])){
    //                 $data->where('kelurahan_id', '=', $wilayah[0]);
    //             }else{
    //                 $kecamatan_id = $wilayah[1];
    //                 $data->whereHas('tb_kelurahan', function ($q) use ($kecamatan_id) {
    //                     $q->where('kecamatan_id', $kecamatan_id);
    //                 });
    //             }
    //         }
    //         $data = $data->get();
    //     } catch (\Exception $exception) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Get Data Penyuluhan Gagal!',
    //             'errormsg' => $exception->getMessage(),
    //             'data' => ''
    //         ], 404, $this->headers);
    //     }

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Get Data Penyuluhan Success!',
    //         'data' => $data
    //     ], 200, $this->headers);
    // }
}
