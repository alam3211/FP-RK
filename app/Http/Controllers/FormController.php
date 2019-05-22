<?php

namespace App\Http\Controllers;

use App\Ruang;
use App\Pengajuan;
use App\Peminjaman;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $ruang = \App\Ruang::all();
        // dd($ruang);
        return view('welcome', compact('ruang'));
    }

    public function ajuan(Request $request){
        $pengajuan = new Pengajuan;
        $pengajuan->NamaPeminjam = $request->namapeminjam;
        $pengajuan->NRP =$request->nrp;
        $pengajuan->HP =$request->email;
        $pengajuan->Email =$request->HP;
        $pengajuan->Organisasi =$request->organisasi;
        $pengajuan->PJ=$request->PJ;
        $pengajuan->Jabatan=$request->Jabatan;
        $pengajuan->Kegiatan=$request->Kegiatan;
        $pengajuan->Deskripsi=$request->Deskripsi;
        $pengajuan->Kategori=$request->kategori;
        $pengajuan->Status="DIPROSES";
        $pengajuan->save();
        for ($i=0; $i <count($request->ruangan) ; $i++) { 
            $peminjaman = new Peminjaman;
            $peminjaman->ID_Permohonan = $pengajuan->id;
            $peminjaman->ID_Ruang = $request->ruangan[$i];
            $peminjaman->JamMulai = $request->Tanggal[$i]. ' ' . $request->Mulai[$i];
            $peminjaman->JamSelesai = $request->Tanggal[$i]. ' ' . $request->Selesai[$i];
            $peminjaman->save();
        }
        return redirect('/');
    }
}
