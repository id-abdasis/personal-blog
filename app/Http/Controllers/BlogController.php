<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use Str;
class BlogController extends Controller
{
    public function index()
    {
        $artikels = Post::paginate(1);
        return view('blog.index')->with(['artikels' => $artikels]);
    }

    public function detailPost()
    {
        return view('blog.single-post');
    }

    public function tambahArtikel()
    {
        return view('admin.tambah-artikel');
    }

    public function postArtikel(Request $request)
    {
        $request->request->add(['slug' => Str::slug($request->title, '-'), 'penulis' => 'Abd. Asis']);
        $post = Post::create($request->all());
        return 'Tambah Data Sukses';
    }
}
