<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Peminjaman extends Model
{
    //
    use Notifiable;
    protected $table = 'peminjaman';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_Permohonan', 
        'ID_Ruang', 
        'JamMulai',
        'JamSelesai',
    ];
    
    public function pengajuan()
    {
        return $this->belongsTo('App\Pengajuan','ID_Permohonan');
    }

    public function ruang()
    {
        return $this->belongsTo('App\Ruang','ID_Ruang');
    }
}
