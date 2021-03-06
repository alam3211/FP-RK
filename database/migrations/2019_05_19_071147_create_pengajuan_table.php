<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaPeminjam');
            $table->string('NRP');
            $table->string('HP');
            $table->string('Email');
            $table->string('Organisasi');
            $table->string('PJ');
            $table->string('Jabatan');
            $table->string('Kegiatan');
            $table->string('Deskripsi');
            $table->string('Kategori');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
