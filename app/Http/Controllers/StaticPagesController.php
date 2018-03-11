<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //

    public function home()
    {
        return view('static.home');
    }

    public function help()
    {
        return view('static.help');
    }

    public function about()
    {
        return view('static.about');
    }
}
