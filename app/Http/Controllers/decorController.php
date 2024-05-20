<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class decorController extends Controller
{
    public function index()
    {
        return view('decor', ['data' => Product::where('category', '2')->get()]);
    }

    public function detail($id) {
        return view('detail', ['data' => Product::where('id', $id)->first()]);
    }
}