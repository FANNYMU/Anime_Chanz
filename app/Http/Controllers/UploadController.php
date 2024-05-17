<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import Facade Storage
use App\Models\Item; // Import model Item

class UploadController extends Controller
{
    /**
     * Handle an incoming upload request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request)
    {
        // Validasi request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Simpan gambar ke storage
        $imagePath = $request->file('image')->store('uploads');

        // Simpan data ke database dengan Eloquent
        $item = new Item();
        $item->image = $imagePath;
        $item->description = $request->input('description');
        $item->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Upload berhasil!');
    }

    /**
     * Delete the specified item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id)
    {
        $item = Item::findOrFail($id);
        Storage::delete($item->image);
        $item->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
