<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class orangeController extends Controller
{
    public function index(){
        return view("orange/index");
    }

    public function blog(){
        $response= Http::get("http://localhost:3000/posts");
        $posts = $response->object();
        return view("orange/blog", compact("posts"));

    }

    public function detail($id) {
        $response = Http::get('http://localhost:3000/posts/'.$id);
            if ($response->successful()) {
            $post = $response->json()[0]; // Access the first element of the array
                        return view('orange.detail', ['post' => $post]);
        } else {
            abort(404); 
        }
    }
    
}
