<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class prewedController extends Controller
{
    public function index()
    {
        return view('prewed', ['data' => Product::where('category', '1')->get()]);
    }

    public function detail($id) {
        return view('detail', ['data' => Product::where('id', $id)->first()]);
    }
}
