<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        // get all data in books table
        $books = Book::all();

        // send 204 if no data
        if(count($books) == 0){
            return response()->json([
                'massage' => 'get all resources',
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'massage' => 'get all resources',
            'data' => $books,
        ], 200);
    }

    function store(Request $request){

        $created = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'rating' => $request->rating,
            'published_date' => $request->published_date,
        ]);

        return response()->json([
            'message' => 'Resource created Succesfully',
            'status' => 201,
            'data' => $created,
        ], 201);
    }

    function show($id){
        $book = Book::find($id);
        // jika id tidak ditemukan
        if(!$book){
            return response()->json([
                'massage' => 'Resource not found',
                'status' => 404,
            ], 404);
        }
        // return book resources
        return response()->json([
            'message' => 'get detail resource',
            'status' => 200,
            'data' => $book,
        ], 200);
    }

    function update(Request $request, $id){
        //menangkap id dan data request body nya
        /**
         * Alur update resource
         * 1. menagkap isd & data request body
         * 2. mendaptakan data book berdasarkan id
         * 3. deklarasikan data yang akan di update
         * 4. update
         */

         $book = Book::find($id);
        // jika id tidak ditemukan
         if(!$book){
            return response()->json([
                'massage' => 'Resource not found',
                'status' => 404,
            ], 404);
        }

         $update = $book->update([
            'title'=>$request->title ?? $book->title,
            'author'=>$request->author ?? $book->author,
            'publisher'=>$request->publisher ?? $book->publisher,
            'rating'=>$request->rating ?? $book->rating,
            'published_date'=>$request->published_date ?? $book->published_date
         ]);

         if($update){
            return response()->json([
                'message' => 'Data update successfully',
                'status' => 200 
            ], 200);
         }
    }
}
