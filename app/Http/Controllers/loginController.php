<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('/login');
    }

    public function getUser($email)
    {
        $user = User::where('email', $email)->first();
        return ['data' => $user];
    }

    public function login(Request $request)
    {
        $validate = $this->getUser($request->email);

        if ($validate['data'] === null) {
            return redirect()->back()->with('gagal', 'email yang anda masukkan salah');
        } else {
            $this->createSession($request, $validate['data']);

            if ($validate['data']['role'] === 'user') {
                return password_verify($request->password, $validate['data']['password'])
                    ? redirect('/beranda')
                    : redirect()->back()->with('gagal', 'password yang anda masukkan salah');
            } else {
                return password_verify($request->password, $validate['data']['password'])
                    ? redirect('/admin/user')
                    : redirect()->back()->with('gagal', 'password yang anda masukkan salah');
            }
        }
    }

    public function createSession($req, $validate)
    {
        $req->session()->put('email', $validate['email']);
        $req->session()->put('id', $validate['id']);
        $req->session()->put('name', $validate['name']);
        $req->session()->put('role', $validate['role']);
    }

    public function logout()
    {
        if (session()->has('email')) {
            session()->pull('name');
            session()->pull('email');
            session()->pull('id');
            session()->pull('role');
        }
        return redirect('/');
    }
}
