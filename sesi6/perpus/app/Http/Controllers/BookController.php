<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        
        // get all data in books table
        $books = Book::all();
        
        // 204 if no data 

        if(count($books) == 0){
            return response()->json([
                'massage' => 'get all resorce',
                "status" => 204,

            ], 204); 
        }
        return response()->json([
            'massage' => 'get all resorce',
            "status" => 200,
            'data' => $books
        ], 200);
    }
}
