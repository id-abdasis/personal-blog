<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use Str;
class BlogController extends Controller
{
    public function index()
    {
        $artikels = Post::paginate(6);
        $artikelTech = Post::where('kategori' , '=', 'Tech')->simplePaginate(6);
        return view('blog.index')->with(['artikels' => $artikels, 'artikelTech' => $artikelTech]);
    }

    public function detailPost($name)
    {
        $artikel = Post::where('slug', '=', $name)->first();
        return view('blog.single-post')->with(['artikel' => $artikel]);
    }

    public function tambahArtikel()
    {
        return view('admin.tambah-artikel');
    }

    public function postArtikel(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            $fileExtension = $request->file('thumbnail')->getClientOriginalExtension();
            $uploadFoto = $request->file('thumbnail')->move('gambar/' . date('d-m-Y') . '/' . date('hsm') . '_' . $request->thumbnail->getClientOriginalName());
        }
        $post = Post::create([
            'title' => $request->title,
            'slug'  =>  Str::slug($request->title, '-'),
            'penulis' => 'Abd. Asis',
            'artikel'   => $request->artikel,
            'thumbnail' => $uploadFoto,
            'tag'       => $request->tag,
            'kategori'  =>  $request->kategori,
            'status'    =>  $request->status,

        ]);
        return 'Tambah Data Sukses';
    }
}
