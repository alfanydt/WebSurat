<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 1rem;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 0.5rem 1rem;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            padding: 1rem;
        }
        .card {
            margin-top: 1rem;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Aplikasi Surat</a>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 sidebar">
            <h4>Menu</h4>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/crud') }}">CRUD Data Surat</a>
            <a href="#">Melihat Data Surat</a>
            <a href="#">Cetak Surat</a>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 content">
            <h1>Data Surat</h1>
            <div class="card">
                <div class="card-header">
                    Tambah Data Surat
                </div>
                <div class="card-body">
                    <form method="POST" action="/crud-surat">
                        @csrf
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK / Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat-lahir" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir / Umur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat-lahir" name="tempat_lahir" placeholder="Tempat / Tanggal Lahir / Umur">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berlaku" class="col-sm-2 col-form-label">Berlaku Dari - Sampai</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="berlaku-dari" name="berlaku_dari">
                            </div>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="berlaku-sampai" name="berlaku_sampai">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penerbit" class="col-sm-2 col-form-label">Tanda Tangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
