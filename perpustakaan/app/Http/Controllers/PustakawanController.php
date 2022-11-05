<?php

namespace App\Http\Controllers;
use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index(){
        // get data in pustakawan table
        $pustakawans = Pustakawan::all();
        // send 204 if no data
        if(count($pustakawans) == 0){
            return response()->json()([
                'massage' => 'get all resources',
                'status' => 204,
            ], 204);
        }
        
        return response()->json([
            'massage' => 'get all resources',
            'data' => $pustakawans,
        ], 200);
    }

    // ada resources
    function store(Request $request){
        $created  = Pustakawan::create([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'shif' => $request->shif,
        ]);

        return response()->json([
            'message' => 'Resource created Succesfully',
            'status' => 201,
            'data' => $created,
        ], 201);
    }
    // get detail Resource
    function show($id){
        $pustakwan = Pustakawan::find($id);
        // jika id tidak ditemukan tampilkan di bawah ini
        if(!$pustakwan){
            return response()->json([
                'message' => 'get detail resource',
                'status' => 404,
            ], 404);
        }
            // return pustakawan resource ada
            return response()->json([
                'message' => 'get detail resource',
                'status' => 200,
                'data' => $pustakwan,
            ], 200);
    }
}
