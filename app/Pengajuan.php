<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Pengajuan extends Model
{
    use Notifiable;
    protected $table = 'pengajuan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NamaPeminjam', 
        'NRP', 
        'HP',
        'Email',
        'Organisasi',
        'PJ',
        'Jabatan',
        'Kegiatan',
        'Deskripsi',
        'Kategori',
        'Status'
    ];

    public function peminjaman()
    {
        return $this->hasOne('App\Peminjaman');
    }
}
