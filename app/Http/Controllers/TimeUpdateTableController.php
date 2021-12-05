<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\TimeUpdateTable;

class TimeUpdateTableController extends Controller
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
    public function getData(Request $request){
        
        try {
            $data = TimeUpdateTable::get();
            $data2[] = (object) array();
            
            for($i = 0; $i < count($data); $i++){
                $data2[$i] = array(
                    'time_update_table_id' => $data[$i]->time_update_table_id,
                    'table_name' => $data[$i]->table_name,
                    'updated_at' => $data[$i]->updated_at.''
                );
            }
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Get Data Time Update Table Gagal!',
                'errormsg' => $exception->getMessage(),
                'data' => ''
            ], 404, $this->headers);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Data Time Update Table Success!',
            'data' => $data2
        ], 200, $this->headers);
    }
}
