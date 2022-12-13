<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('.welcome', compact('posts'));
    }

    public function show($id)
    {
        $post = Posts::where('id', '=', $id)->select('*')->first();
        return view('.detail_post', compact('post'));
    }

    public function documents()
    {
        return view('.documents');
    }
    
    
}