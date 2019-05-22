<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Pengajuan;
class PeminjamanController extends Controller
{
    //
    public function index()
    {
        $query = Pengajuan::All();
        // dd($query);
        return view('dashboard',compact('query'));
    }

    public function show_detail($id)
    {
        $query = Peminjaman::find($id);
        // dd($query);
        return view('edit',compact('query'));
    }

    public function edit(Request $request, $id)
    {
        $query = Peminjaman::find($id);
        $query->pengajuan->namaPeminjam = $request->input('nama') ?? $query->pengajuan->namaPeminjam;
        $query->ruang->Ruang = $request->input('ruang') ?? $query->ruang->Ruang;
       
        $query->save();
        $query->pengajuan->save();
        $query->ruang->save();

        return view('edit',compact('query'));
    }
}
