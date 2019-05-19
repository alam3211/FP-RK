<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Ruang extends Model
{
    //
    use Notifiable;
    protected $table = 'ruang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Ruang',
    ];

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman');
    }
}
