<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class editprofileController extends Controller
{
    public function show($id)
    {
        return view('edit_profile', ['data' => User::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $data = User::where('email', $request->email)->first();
        if ($data !== null) {
            if ($request->email === $data->email && $data->id === (int) $id) {
                return $this->saveUpdate($request, $id, $data);
            } else if ($data->id !== (int) $id) {
                return redirect()->back()->with('gagal', 'email telah terdaftar');
            }
        } else {
            return $this->saveUpdate($request, $id, $data);
        }
    }

    public function saveUpdate($request, $id, $data)
    {
        if ($request->picture) {
            $this->deleteImage($data['picture']);
            return User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->phone,
                'alamat' => $request->address,
                'picture' => $this->storeImage($request->picture)
            ])
                ? redirect('/profile')->with('sukses', 'berhasil update data')
                : redirect()->back()->with('gagal', 'gagal update data');
        } else {
            return User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->phone,
                'alamat' => $request->address,
            ])
                ? redirect('/profile')->with('sukses', 'berhasil update data')
                : redirect()->back()->with('gagal', 'gagal update data');
        }
    }

    public function deleteImage($name)
    {
        File::delete('uploads/users/' . $name);
    }

    public function storeImage($file)
    {
        $image = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/users/', $image);
        return $image;
    }
}
