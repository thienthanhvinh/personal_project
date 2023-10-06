<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function about() {
        return view('page.about');
    }
    function contact() {
        return view('page.contact');
    }
}
