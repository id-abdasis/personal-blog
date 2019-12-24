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
            $tujuanFolder = 'gambar/' . date('d-m-Y') . '/';
            $uploadFoto = $request->file('thumbnail')->move($tujuanFolder, date('hsm') . '_' . $request->file('thumbnail')->getClientOriginalName());
        }
        $post = Post::create([
            'title' => $request->title,
            'slug'  =>  Str::slug($request->title, '-'),
            'penulis' => 'Abd. Asis',
            'artikel'   => $request->artikel,
            'thumbnail' => 'gambar/' . date('d-m-Y') . '/' . date('hsm') . '_' . $request->file('thumbnail')->getClientOriginalName(),
            'tag'       => $request->tag,
            'kategori'  =>  $request->kategori,
            'status'    =>  $request->status,

        ]);
        return 'Tambah Data Sukses';
    }

    public function daftarArtikel()
    {
        $artikels = Post::all();
        return view('admin.daftar-artikel')->with(['artikels' => $artikels]);
    }

    public function editArtikel($slug)
    {
        $artikel = Post::where('slug', '=', $slug)->first();
        return view('admin.edit-artikel')->with(['artikel' => $artikel]);
    }
}
