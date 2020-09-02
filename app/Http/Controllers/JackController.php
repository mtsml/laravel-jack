<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JackController extends Controller
{

    public function index () 
    {
        return view('index');
    }

    public function detail () 
    {        
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('detail', compact('hello', 'hello_array'));
    }

    public function edit ()
    {
        return view('edit');
    }

    public function update ()
    {
        return 'update';
    }

}
