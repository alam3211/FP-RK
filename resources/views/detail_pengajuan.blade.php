@extends('adminlte::page')

@section('title', 'Detail Pengajuan Reservasi - ReservasiIF')

@section('content_header')
    <h1>Detail Pengajuan<small>Reservasi IF</small></h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Pengajuan Reservasi #{{$query->id}}</h3>
        <span class="badge bg-blue">{{$query->Status}}</span>
        <span class="pull-right"><a href="{{ route('edit',$query->id) }}" type="button" class="btn btn-warning">Edit Reservasi</a></span>
      </div>
      <div class="box-body">
        <div class="box-body">
          <div class="row">
            <div class="col-md-3">
              <strong>Nama Peminjam</strong>
            </div>
            <div class="col-md-9">
              : {{$query->NamaPeminjam}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>NRP</strong>
            </div>
            <div class="col-md-9">
              : {{$query->NRP}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Kontak</strong>
            </div>
            <div class="row">
              <div class="col-md-1">
                HP<br/>
                Email
              </div>
              <div class="col">
                : {{$query->HP}}<br/>
                : {{$query->Email}}
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Organisasi</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Organisasi}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Penanggungjawab</strong>
            </div>
            <div class="col-md-9">
              : {{$query->PJ}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Jabatan</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Jabatan}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Kegiatan</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Kegiatan}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Deskripsi</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Deskripsi}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Kategori</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Kategori}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Status</strong>
            </div>
            <div class="col-md-9">
              : {{$query->Status}}
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <strong>Ruangan yang Dipinjam</strong>
            </div>
            <div class="col-md-9">
              : @foreach($ruang as $key => $value)
              <strong>{{$value}}</strong> untuk pemakaian tanggal <strong>{{$peminjaman[$key]->JamMulai}}</strong> hingga <strong>{{$peminjaman[$key]->JamSelesai}}</strong><br/>
              @endforeach
            </div>
          </div>
          <div class="row pt-4">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
              <button class="btn btn-danger btn-block pull-right" data-toggle="modal" data-target="#modalTolak">Tolak Reservasi</button>
            </div>
            <div class="col-md-2">
              <button class="btn btn-success btn-block pull-right" data-toggle="modal" data-target="#modalTerima">Terima Reservasi</button>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
</div>

<div class="modal fade" id="modalTolak" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Konfirmasi Penolakan</h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin akan menolak pengajuan reservasi ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <a href="/admin/pengajuan/rej/{{$query->id}}"><button type="button" class="btn btn-danger">Tolak Reservasi</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modalTerima" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Konfirmasi Penerimaan</h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin akan menerima pengajuan reservasi ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <a href="/admin/pengajuan/acc/{{$query->id}}"><button type="button" class="btn btn-success">Terima Reservasi</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
    </script>

@stop