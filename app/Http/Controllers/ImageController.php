<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('gambar.index', [
            'images' => $images
        ]);
    }

    public function halaman()
    {
        $images  = Image::all();
        return view('gambar.MediaGambar')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nama = $request->nama;
        $barang = $request->barang;
        $paket = $request->paket;
        $pesan = $request->pesan;

        Image::create(['nama' => $nama,'paket' => $paket,'pesan' => $pesan,'barang' => $barang]);

        return  redirect()->route('images.index')
            ->with('success', 'You have successfully upload file.');
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
        $user = Image::find($id);
        if (!$user) return redirect()->route('gambar.index')
            ->with('error_message', 'User dengan id' . $id . ' tidak ditemukan');
        return view('gambar.edit', [
            'user' => $user
        ]);
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
        $request->validate([
            'nama' => 'required',
            'barang' => 'required',
            'paket' => 'required|',
            'pesan' => 'required'
        ]);
        $user = Image::find($id);
        $user->nama = $request->nama;
        $user->barang = $request->barang;
        $user->paket = $request->paket;
        $user->pesan = $request->pesan;
        $user->save();
        return redirect()->route('images.index')
            ->with('success_message', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Image::find($id);
        if ($images) $images->delete();
        return redirect()->route('images.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
