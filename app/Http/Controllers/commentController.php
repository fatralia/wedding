<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index()
    {
        return view('comment');
    }
}