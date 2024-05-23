<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class commentController extends Controller
{
    public function admin()
    {
        $data = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.comment', 'users.*')
            ->get();
        return view('admin.comment', ['data' => $data]);
    }

    public function index()
    {
        $data = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.comment', 'users.*')
            ->get();
        return view('comment', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $productData = Pesanan::where('user_id', session('id'))->first();
        if ($productData) {
            return Comment::insert([
                'user_id' => session('id'),
                'comment' => $request->comment
            ])
                ? redirect('/comment')->with('sukses', 'berhasil menambahkan data')
                : redirect()->back()->with('gagal', 'gagal menambahkan data');
        } else {
            return redirect()->back()->with('gagal', 'Anda belum memesan produk');
        }
    }
}
