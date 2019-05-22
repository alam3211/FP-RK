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
    <label for="exampleInputEmail1">Pilihan Ruang</label>
    <input required  type="text" class="form-control" name="ruang" id="ruang" value="{{ $query->ruang()->first()->Ruang }}">
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