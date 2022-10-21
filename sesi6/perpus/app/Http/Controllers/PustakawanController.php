<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index(){
        $data = [
            "name" => "Andre",
            "gender" => "L",
            "Shift" => "malam"
            
        ];
        return response()->json($data);
    }
}
