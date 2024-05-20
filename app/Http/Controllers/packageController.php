<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class packageController extends Controller
{
    public function index()
    {
        return view('package', ['data' => Product::where('category', '3')->get()]);
    }

    public function detail($id)
    {
        return view('detail', ['data' => Product::where('id', $id)->first()]);
    }
}
