<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = \DB::table('posts')->latest('id')->get();
        return view('home', compact('posts'));
    }

    public function CreatePost(Request $request)
    {   

        \DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
            'author' => $request->author,
        ]);

        return redirect()->back();
    }
}
