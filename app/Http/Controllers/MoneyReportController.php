<?php

namespace App\Http\Controllers;

use App\Models\MoneyReport;
use Illuminate\Http\Request;
use App\Exports\MoneyExport;
use Maatwebsite\Excel\Facades\Excel;

class MoneyReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moneyreport = MoneyReport::all();
        return view('laporankeuangan.index', [
            'moneyreport' => $moneyreport
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporankeuangan.create');
    }

    public function halaman()
    {
        $moneyreport  = MoneyReport::all();
        return view('laporankeuangan.laporankeuangan')->with('moneyreport', $moneyreport);
    }

    public function export()
    {
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
        $lokasi = $request->lokasi;
        $penerima = $request->penerima;
        $tanggal = $request->tanggal;
        $harga = $request->harga;

        MoneyReport::create(['nama' => $nama, 'lokasi' => $lokasi, 'penerima' => $penerima, 'tanggal' => $tanggal, 'harga' => $harga]);

        return  redirect()->route('file.index')
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
        $user = MoneyReport::find($id);
        if (!$user) return redirect()->route('laporankeuangan.index')
            ->with('error_message', 'User dengan id' . $id . ' tidak ditemukan');
        return view('laporankeuangan.edit', [
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
            'lokasi'=>'required',
            'penerima' => 'required',
            'harga' => 'required'
        ]);

        $user = MoneyReport::find($id);
        $user->nama = $request->nama;
        $user->lokasi = $request->lokasi;
        $user->penerima = $request->penerima;
        $user->tanggal = $request->tanggal;
        $user->harga = $request->harga;

        $user->save();
        return redirect()->route('file.index')
            ->with('success_message', 'Berhasil mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $file = MoneyReport::find($id);
        if ($id == $request->user()->id) return redirect()->route('file.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($file) $file->delete();
        return redirect()->route('file.index')
            ->with('success_message', 'Berhasil menghapus user');
    }
}
