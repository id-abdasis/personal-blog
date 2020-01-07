<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use Str;
use App\User;
use Alert;
class BlogController extends Controller
{
    public function index()
    {
        $artikels = Post::where('status', 'Publish')->latest()->paginate(6);
        $artikelTechs = Post::latest()->where('kategori' , '=', 'Tech')->limit(6)->get();
        
        return view('blog.index')->with([
            'artikels' => $artikels,
            'artikelTechs' => $artikelTechs,

        ]);
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
            $moveUpload = $request->file('thumbnail')->move($tujuanFolder, date('hsm') . '_' . $request->file('thumbnail')->getClientOriginalName());
            $uploadFoto = 'gambar/' . date('d-m-Y') . '/' . date('hsm') . '_' . $request->file('thumbnail')->getClientOriginalName();
        }else{
            $uploadFoto = 'images/default-images.png';
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

    public function daftarArtikel()
    {
        $countPostPublish   = Post::where('status', 'Publish')->count();
        $countPostDraft   = Post::where('status', 'Draft')->count();
        $countPostPending   = Post::where('status', 'Pending')->count();
        $artikels = Post::latest()->get();
        return view('admin.daftar-artikel')->with([
            'artikels' => $artikels,
            'countPostPublish'  =>  $countPostPublish,
            'countPostDraft'    =>  $countPostDraft,
            'countPostPending'  =>  $countPostPending,
        ]);
    }

    public function editArtikel($slug)
    {
        $artikel = Post::where('slug', $slug)->first();
        return view('admin.edit-artikel')->with(['artikel' => $artikel]);
    }

    public function updateArtikel(Request $request)
    {
        $artikel = Post::findOrFail($request->id);
        $updateArtikel = $artikel->fill($request->all())->save();
        if ($updateArtikel) {
            Alert::success('Success', 'Artikel Berhasil di Update');
            return redirect()->route('admin.daftar-artikel');
        }
        
    }

    public function installation()
    {
        if (User::all()->count() == 0) {
            $user = User::create([
                'name' => 'Abd. Asis',
                'email' =>  'id.abdasis@gmail.com',
                'password'  => \bcrypt('rahasia'),
            ]);

            if ($user) {
                Alert::success('Berhasil', 'Setup blog berhasil dilakukan silahkan login');
                return redirect('/login');
            }
        }else{
            Alert::error('Gagal', 'Maaf anda sudah melakukan setup sebelumnya');
            return redirect('/login');
        }
    }

    public function deleteArtikel($id)
    {
        # code...
        $artikel = Post::findOrFail($id)->delete();
        Alert::success('Berhasil', 'Artikel Berhasil Dihapus');
        return redirect()->route('admin.daftar-artikel');
    }
}
