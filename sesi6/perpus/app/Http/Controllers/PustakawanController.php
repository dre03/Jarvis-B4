<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index(){

        // get all in data pustakawan table
        $pustakawans = Pustakawan::all();
        
        // 204 if no data
        if(count($pustakawans) == 0){
            return response()->json([
                'massage' => 'get all resorce',
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'massage' => 'get all resorce',
            'status' => 200,
            'data' => $pustakawans
        ], 200);
    }
}
