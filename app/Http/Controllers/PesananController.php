<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $data = DB::table('pesanans')
            ->join('products', 'pesanans.product_id', '=', 'products.id')
            ->join('users', 'pesanans.user_id', '=', 'users.id')
            ->select('pesanans.bukti', 'pesanans.tanggal', 'users.*', 'products.name as product')
            ->get();
        return view('admin.index', ['data' => $data]);
    }
}
