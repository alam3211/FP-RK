@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')
    <h1>Edit Pengajuan</h1>
@stop

@section('content')
<form action="{{ route('edit',$query->id) }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Peminjam</label>
    <input required  type="text" class="form-control" name="nama" id="nama" value="{{ $query->pengajuan()->first()->NamaPeminjam }}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NRP/NIP</label>
    <input type="text" class="form-control" name="nrp" id="nrp" value="{{ $query->pengajuan()->first()->NRP }}">
  </div>
  <div class="row">  
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ $query->pengajuan()->first()->Email }}">
    </div>  
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">HP</label>
      <input type="text" class="form-control" name="hp" id="hp" value="{{ $query->pengajuan()->first()->HP }}">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Organisasi yang diwakilkan</label>
    <input type="text" class="form-control" name="organisasi" id="organisasi" value="{{ $query->pengajuan()->first()->Organisasi }}">
  </div>
  <div class="row">  
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Penganggungjawab</label>
      <input type="text" class="form-control" name="pj" id="pj" value="{{ $query->pengajuan()->first()->PJ }}">
    </div>  
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">HP</label>
      <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $query->pengajuan()->first()->Jabatan }}">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kegiatan</label>
    <input type="text" class="form-control" name="kegiatan" id="kegiatan" value="{{ $query->pengajuan()->first()->Kegiatan }}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi Kegiatan</label>
    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $query->pengajuan()->first()->Deskripsi }}">
  </div>
  <div class="form-group">
      <label for="kategori">Kategori</label>
      <select name="kategori" id="kategori" class="form-control">
          <option value="Evaluasi/Ujian">Evaluasi/Ujian</option>
          <option value="Rapat Organisasi">Rapat Organisasi</option>
          <option value="Workshop">Workshop</option>
          <option value="Praktikum">Praktikum</option>
          <option value="Lomba">Lomba</option>
          <option value="Lainnya">Lainnya</option>
      </select>
  </div>
  <h5>Ruangan yang Dipinjam</h5>
  <div class="row">
      <div class="form-group col-md-3">
          <small>Ruangan</small>
          <select name="ruangan[]" id="ruangan" class="form-control">
          @foreach ($ruang as $item)
              <option value="{{{$item->id}}}">{{{$item->Ruang}}}</option>
          @endforeach
          </select>
      </div>
      <div class="form-group col-md-3">
          <small>Tanggal</small>
          <input value="{{ $query->JamMulai->format('m-d-y')}}"class="form-control" type="date" name="Tanggal[]">
      </div>
      <div class="form-group col-md-3">
          <small>Jam Mulai</small>
          <input value="{{ $query->JamMulai->format('H:i') }}" class="form-control" type="time" name="Mulai[]">
      </div>
      <div class="form-group col-md-3">
          <small>Jam Selesai</small>
          <input value="{{ $query->JamSelesai->format('H:i') }}" class="form-control" type="time" name="Selesai[]">
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop