<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class confirmController extends Controller
{
    public function index($id)
    {
        return view('confirm', ['data' => Pesanan::where('id', $id)->first()]);
    }

    public function store(Request $request, $id)
    {
        return Pesanan::where('id', $id)->update([
            'bukti' => $this->storeImage($request->picture)
        ])
            ? redirect('/beranda')->with('sukses', 'berhasil tambah data')
            : redirect()->back()->with('gagal', 'gagal tambah data');
    }

    public function storeImage($file)
    {
        $image = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/pesanans/', $image);
        return $image;
    }
}
