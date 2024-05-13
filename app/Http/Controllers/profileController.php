<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    // Method untuk menampilkan halaman profile
    public function showProfilePage()
    {
        return view('profile');
    }
}