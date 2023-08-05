<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function sort($sort)
    {
        return view('welcome',compact('sort'));
    }
}
