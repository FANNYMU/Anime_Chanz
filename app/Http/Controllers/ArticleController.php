<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import model Article

class ArticleController extends Controller
{
    public function index() {
        $items = Article::all();

        return view('articles.index', [
            'items' => $items
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imageURL' => 'nullable|url', // Validasi URL gambar
            'description' => 'required|string',
        ]);

        // Simpan gambar ke storage
        $imagePath = $request->file('image')->store('uploads');

        // Simpan data ke database dengan Eloquent
        $article = new Article();
        $article->title = $request->input('title');
        $article->image_url = $imagePath; // Gunakan URL gambar yang diunggah oleh pengguna
        $article->description = $request->input('description');
        $article->save();

        return redirect()->back()->with('success', 'Artikel berhasil disimpan!');
    }
}
