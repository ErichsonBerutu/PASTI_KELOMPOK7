<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sektor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-weight: bold;
        }
        .breadcrumb {
            background: none;
            padding: 0;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

@extends('utils.nav')
@section('admin')
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="pagetitle">
                <h1>Sektor</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Sektor</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Sektor</h5>

                                <!-- General Form Elements -->
                                <form role="form" action="{{ route('sektor.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="kode_sektor" class="col-sm-3 col-form-label">Kode Sektor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kode_sektor" name="kode_sektor">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="nama_sektor" class="col-sm-3 col-form-label">Nama Sektor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_sektor" name="nama_sektor">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="alamat_sektor" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="alamat_sektor" name="alamat_sektor">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="nama_kepala_sektor" class="col-sm-3 col-form-label">Nama Kepala Sektor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_kepala_sektor" name="nama_kepala_sektor">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form><!-- End General Form Elements -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

</body>
@endsection
</html>
