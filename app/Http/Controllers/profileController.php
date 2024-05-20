<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    // Method untuk menampilkan halaman profile
    public function showProfilePage()
    {
        return view('profile', ['data' => User::where('id', session('id'))->first()]);
    }
}
