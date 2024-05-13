<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = admin::orderBy('id', 'asc')->get();
        return view('admin.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data = admin::orderBy('id', 'asc')->get();
        return view('admin.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'pesanan'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'tanggal'=>'required',
        ]);
        $data =[
            'nama'=>$request->nama,
            'pesanan' => $request->pesanan,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            'tanggal'=>$request->tanggal,
        ];
        admin::create($data);
        return redirect()->to('admin_web')->with('success', 'Berhasil menambahkan pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)

    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return admin::where('id', $id)->update([
            'nama' => $request->nama,
            'pesanan' => $request->pesanan,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal' => $request->tanggal,
        ])
        ? redirect('admin_web/')
        : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return admin::where('id', $id)->delete()
        ? redirect('admin_web/')
        : redirect()->back();
    }
}
