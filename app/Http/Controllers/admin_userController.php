<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class admin_userController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'user')->get();
        return view('admin.admin_user', ['data' => $data]);
    }

    public function store(Request $request)
    {
        if (User::where('email', $request->email)->first() === null) {
            if ($request->password === $request->confirm) {
                if (User::insert([
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => 'user'
                ])) {
                    return redirect('auth/login')->with('sukses', 'success create account');
                } else {
                    return redirect()->back()->with('gagal', 'failed create account');
                }
            } else {
                return redirect()->back()->with('gagal', 'Password yang anda masukkan tidak sama');
            }
        } else {
            return redirect()->back()->with('gagal', 'email telah terdaftar');
        }
    }

    public function destroy($id)
    {
        return User::where('id', $id)->delete()
            ? redirect('/admin/user')->with('sukses', 'success delete user data')
            : redirect()->back()->with('gagal', 'failed delete user data');
    }
}
