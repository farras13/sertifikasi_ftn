<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/berandaadmin');
    }

    public function datauser()
    {
        $data = User::all();
        return view('admin/datauser', ['data' => $data]);
    }

    //kategori
    public function tampilkategori()
    {
        $data = Kategori::all();
        return view('admin/kategoribuku', ['data' => $data]);
    }
    public function createkategori()
    {
        return view('admin/tambahkategori');
    }

    public function storekategori(Request $request)
    {
        $rules = [
            'nama_kategori' => 'required|string'
        ];

        Kategori::create([
            'nama_kategori' => $request->input('nama_kategori')
        ]);

        return redirect('kategoribuku')->with('success', 'Data Berhasil Disimpan');
    }

    public function editkategori($id)
    {
        $kategori = Kategori::find($id);
        return view('admin/editkategori', compact('kategori'));
    }
    public function updatekategori(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|string',
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect('kategoribuku')->with('success', 'Data Berhasil Diubah');
    }

    public function destroykategori($id)
    {
        Kategori::where('id_kategori', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    //buku
    public function tampilbuku()
    {
        $data = Buku::all();
        return view('admin/databuku', ['data' => $data]);
    }
    public function createbuku()
    {
        $kategori = Kategori::all();
        return view('admin/tambahbuku', ['kategori' => $kategori]);
    }
    public function storebuku(Request $request)
    {
        $rules = [
            'judul' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'halaman' => 'required|string|max:255',
            'thn_terbit' => 'required|int|max:11',
            'kategori' => 'required',
            'harga_buku' => 'required',
            'gambar_buku' => 'required|image|mimes:jpg,jpeg,png'
        ];

        $file = $request->file('gambar_buku');
        $image_name = $file->getClientOriginalName();

        if ($file) {
            $image_name = $file->store('images', 'public');
        }

        Buku::create([
            'judul' => $request->input('judul'),
            'penerbit' => $request->input('penerbit'),
            'halaman' => $request->input('halaman'),
            'thn_terbit' => $request->input('thn_terbit'),
            'kategori' => $request->input('kategori'),
            'harga_buku' => $request->input('harga_buku'),
            'gambar_buku' => $image_name

        ]);

        return redirect('databuku')->with('success', 'Data Berhasil Disimpan');
    }

    public function editbuku($id)
    {
        $buku = Buku::find($id);
        $kategori = Kategori::all();
        return view('admin/editbuku', compact('buku'), compact('kategori'));
    }
    public function updatebuku(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'penerbit' => 'required|string',
            'halaman' => 'required|string',
            'thn_terbit' => 'required|int',
            'kategori' => 'required',
            'harga_buku' => 'required',
            'gambar_buku' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $buku = Buku::find($id);
        $file = $request->file('gambar_buku');
        $gambar_buku = '';

        if ($file) {
            $gambar_buku = $file->store('images', 'public');

            if (Storage::exists('public/' . $buku->gambar_buku)) {
                Storage::delete('public/' . $buku->gambar_buku);
            }
        }

        if (!empty($request->file('gambar_buku'))) {
            Buku::where('id_buku', $id)->update([
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'halaman' => $request->halaman,
                'thn_terbit' => $request->thn_terbit,
                'kategori' => $request->kategori,
                'harga_buku' => $request->harga_buku,
                'gambar_buku' => $gambar_buku

            ]);
        } else {
            Buku::where('id_buku', $id)->update([
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'halaman' => $request->halaman,
                'thn_terbit' => $request->thn_terbit,
                'kategori' => $request->kategori,
                'harga_buku' => $request->harga_buku,
                'gambar_buku' => $gambar_buku

            ]);
        }

        return redirect('buku')->with('success', 'Data Berhasil Diubah');
    }
    public function destroybuku($id)
    {
        Buku::where('id_buku', $id)->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
