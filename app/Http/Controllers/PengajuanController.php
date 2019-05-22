<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Pengajuan;
use App\Ruang;
class PengajuanController extends Controller
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
        $data['query'] = Pengajuan::find($id);
        $data['ruang'] = array();
        $data['peminjaman'] = Peminjaman::where('ID_Permohonan', $id)->get();
        // dd($data['peminjaman']);
        foreach ($data['peminjaman'] as $key => $value) {
            $ruangan = Ruang::find($value->ID_Ruang)->Ruang;
            // dd($ruangan);
            array_push($data['ruang'], $ruangan);
        }
        return view('detail_pengajuan',$data);
    }
}
