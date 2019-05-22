@extends('adminlte::page')

@section('title', 'Dashboard Admin - ReservasiIF')

@section('content_header')
    <h1>Dashboard<small>Reservasi IF</small></h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Pengajuan Peminjaman Ruangan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-hover">
                    <tbody>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Ajuan Reservasi</th>
                      <th>Diajukan Oleh</th>
                      <th>Kategori</th>
                      <th>Status Pengajuan</th>
                    </tr>
                    @foreach($query as $query)
                    <tr class="clickable-row" data-href='/admin/pengajuan/{{$query->id}}'>
                      <td>{{$query->id}}</td>
                      <td>{{$query->Kegiatan}}</td>
                      <td>{{$query->NamaPeminjam}}</td>
                      <td>{{$query->Kategori}}</td>
                      <td>{{$query->Status}}</td>
                    </tr>
                    @endforeach
                  </tbody></table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
  </div>
</div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
          $(".clickable-row").click(function() {
              window.location = $(this).data("href");
          });
      });
    </script>

@stop