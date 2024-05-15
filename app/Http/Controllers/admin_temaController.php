<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_temaController extends Controller
{
    public function index()
    {
        return view('admin.admin_tema');
    }
}