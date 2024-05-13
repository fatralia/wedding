<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class confirmController extends Controller
{
    public function index()
    {
        return view('confirm');
    }
}