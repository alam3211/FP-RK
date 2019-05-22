<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Pengajuan;
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
        $query = Pengajuan::find($id);
        // dd($query);
        return view('detail_pengajuan',compact('query'));
    }
}
