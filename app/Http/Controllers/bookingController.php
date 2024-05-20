<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    public function index($id)
    {
        return view('booking', [
            'data' => Product::where('id', $id)->first(),
            'user' => User::where('id', session('id'))->first()
        ]);
    }

    public function store(Request $request, $id)
    {
        $getId = DB::table('pesanans')->insertGetId([
            'user_id' => session('id'),
            'tanggal' => $request->date,
            'product_id' => $id
        ]);
        if ($getId) {
            return redirect('confirm/' . $getId)->with('sukses', 'berhasil tambah data');
        } else {
            return redirect()->back()->with('gagal', 'gagal tambah data');
        }
    }
}
