<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Pengajuan;
use App\Ruang;
use DateTime;
class PeminjamanController extends Controller
{
    //
    public function show_detail($id)
    {
        $query = Peminjaman::where('ID_Permohonan',$id)->first();
        $query->JamMulai = DateTime::createFromFormat('Y-m-d H:i:s',$query->JamMulai);
        $query->JamSelesai = DateTime::createFromFormat('Y-m-d H:i:s',$query->JamSelesai);
        $ruang = Ruang::all();
        // dd($query->JamSelesai->format('m-d-Y'));
        return view('edit',compact('query','ruang'));
    }

    public function edit(Request $request, $id)
    {
        $query = Peminjaman::find($id);
        $query->pengajuan->namaPeminjam = $request->input('nama') ?? $query->pengajuan->namaPeminjam;
        $query->pengajuan->NRP = $request->input('nrp') ?? $query->pengajuan->NRP;
        $query->pengajuan->email = $request->input('email') ?? $query->pengajuan->NRP;
        $query->pengajuan->HP = $request->input('hp') ?? $query->pengajuan->NRP;
        $query->pengajuan->organisasi = $request->input('organisasi') ?? $query->pengajuan->NRP;
        $query->pengajuan->PJ = $request->input('pj') ?? $query->pengajuan->NRP;
        $query->pengajuan->jabatan = $request->input('NRP') ?? $query->pengajuan->NRP;
        $query->pengajuan->kegiatan = $request->input('kegiatan') ?? $query->pengajuan->NRP;
        $query->pengajuan->deskripsi = $request->input('deskripsi') ?? $query->pengajuan->NRP;
       
        for ($i=0; $i <count($request->ruangan) ; $i++) { 
            $query->ID_Ruang = $request->ruangan[$i] ?? $query->Id_Ruang;
            $query->JamMulai = $request->Tanggal[$i]. ' ' . $request->Mulai[$i] ?? $query->JamMulai; 
            $query->JamSelesai = $request->Tanggal[$i]. ' ' . $request->Selesai[$i] ?? $query->JamSelesai;
            $query->save();            
        }
        $query->save();
        $query->pengajuan->save();

        $query->JamMulai = DateTime::createFromFormat('Y-m-d H:i',$query->JamMulai);
        $query->JamSelesai = DateTime::createFromFormat('Y-m-d H:i',$query->JamSelesai);

        $ruang = Ruang::all();

        return view('edit',compact('query','ruang'));
    }
}
