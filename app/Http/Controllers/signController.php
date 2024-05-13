<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signController extends Controller
{
    // Method untuk menampilkan halaman sign
    public function showSignPage()
    {
        return view('sign');
    }
}
