<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class admin_productController extends Controller
{
    public function index()
    {
        return view('admin.admin_product', ['data' => Product::get()]);
    }

    public function storeImage($file)
    {
        $image = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/products/', $image);
        return $image;
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'mimes:jpg,jpeg,png'
        ]);


        return Product::insert([
            'name' => $request->name,
            'category' => $request->category,
            'detail' => $request->detail,
            'min' => $request->min,
            'max' => $request->max,
            'picture' => $this->storeImage($request->picture)
        ])
            ? redirect('/admin/product')->with('success', 'data produk berhasil ditambahkan')
            : redirect()->back()->with('gagal', 'gagal menambahkan data');
    }

    public function update(Request $request, $id)
    {
        $getImage = Product::where('id', $id)->first();
        if ($request->picture == null) {
            return Product::where('id', $id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'detail' => $request->detail,
                'min' => $request->min,
                'max' => $request->max,
                'picture' => $getImage['picture']
            ])
                ? redirect('/admin/product')->with('success', 'berhasil update data')
                : redirect()->back();
        } else {
            $this->deleteImage($getImage['picture']);
            return Product::where('id', $id)->update([
                'name' => $request->name,
                'category' => $request->category,
                'detail' => $request->detail,
                'min' => $request->min,
                'max' => $request->max,
                'picture' => $this->storeImage($request->picture)
            ])
                ? redirect('/admin/product')->with('success', 'berhasil update data')
                : redirect()->back();
        }
    }

    public function deleteImage($name)
    {
        File::delete('uploads/products/' . $name);
    }

    public function destroy($id)
    {
        $data = Product::where('id', $id)->first();
        $this->deleteImage($data['picture']);
        return $data->delete()
            ? redirect('/admin/product')->with('success', 'berhasil menghapus data')
            : redirect()->back()->with('gagal', 'gagal menghapus data');
    }
}
