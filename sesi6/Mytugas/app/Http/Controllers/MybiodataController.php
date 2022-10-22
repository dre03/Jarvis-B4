<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MybiodataController extends Controller
{
    function index(){
        $data = [
            "Nama" => "Andre Apriyana",
            "TTL" => "Jakarta, 24-04-2003",
            "Gender" => "L",
            "Address" => "Bogor,Leuwiliang",
            "is_student" => true,

        ];
        return response()->json($data);
    }
}
