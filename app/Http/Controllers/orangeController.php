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
         // Make an HTTP request to the API endpoint to fetch the post details
    $response = Http::get('http://localhost:3000/posts/'.$id);

    // Check if the request was successful
    if ($response->successful()) {
        // Retrieve the post details from the API response
        $post = $response->json();
        // Pass the $post to the detail view
        return view('post.detail', ['post' => $post]);
    } else {
        // Handle the case where the request was not successful, for example:
        abort(404); // You can customize the error handling based on your requirements
    }
    }
    
    
}
