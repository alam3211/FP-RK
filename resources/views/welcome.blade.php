<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>RESERVASI IF ITS</title>
</head>

<body style="background-color: #0055c4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Reservasi IF ITS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="card m-3">
            <div class="card-header">
                <h6>Formulir Reservasi</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="/ajuan">
                    @csrf
                    <div class="form-group">
                        <label for="namapeminjam">Nama Peminjam</label>
                        <input name="namapeminjam" type="text" class="form-control" id="namapeminjam"
                            placeholder="Nama Peminjam">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP/NIP</label>
                        <input name="nrp" type="text" class="form-control" id="nrp" placeholder="NRP / NIP">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hp">HP</label>
                            <input name="HP" type="text" class="form-control" id="hp" placeholder="0853...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="organisasi">Organisasi yang diwakilkan</label>
                        <input name="organisasi" type="text" class="form-control" id="organisasi"
                            placeholder="Himpunan, BEM, Lab, dan lainnya">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="PJ">Penanggung Jawab</label>
                            <input name="PJ" type="text" class="form-control" id="PJ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Jabatan">Jabatan</label>
                            <input name="Jabatan" type="text" class="form-control" id="Jabatan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Kegiatan">Nama Kegiatan</label>
                        <input name="Kegiatan" type="text" class="form-control" id="Kegiatan"
                            placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi Kegiatan</label>
                        <input name="Deskripsi" type="text" class="form-control" id="Deskripsi" placeholder="Deskripsi">
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

                    <h5>Ruangan yang dipinjam</h5>
                    <a class="btn btn-primary" onclick="tambah()">Tambah Ruangan</a>
                    <div id="peminjamanslot">
                        <div id="peminjaman">
                            <div class="form-row">
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
                                    <input class="form-control" type="date" name="Tanggal[]">
                                </div>
                                <div class="form-group col-md-3">
                                    <small>Jam Mulai</small>
                                    <input class="form-control" type="time" name="Mulai[]">
                                </div>
                                <div class="form-group col-md-3">
                                    <small>Jam Selesai</small>
                                    <input class="form-control" type="time" name="Selesai[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

<script>
function tambah(){
     document.getElementById('peminjamanslot').innerHTML = document.getElementById('peminjamanslot').innerHTML + document.getElementById('peminjaman').innerHTML;
 }
 </script>
</html>