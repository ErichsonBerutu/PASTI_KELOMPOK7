@extends('utils.nav')

@section('admin')
@include('sweetalert::alert')
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .pagetitle {
            margin: 20px 0;
        }
        .breadcrumb {
            background-color: #ffffff;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn {
            margin-right: 10px;
        }
        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .table-striped tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 pagetitle">
                <h1>Sektor</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Sektor</li>
                    </ol>
                </nav>
                <div>
                    <a href="{{ route('sektor.add') }}">
                        <button type="button" class="btn btn-warning rounded-pill">Tambah</button>
                    </a>
                </div>
            </div><!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Sektor</h5>
                                <!-- Table with stripped rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode Sektor</th>
                                                <th scope="col">Nama Sektor</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Nama Kepala Sektor</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $sektor)
                                            <tr>
                                                <td>{{ $sektor['kode_sektor'] }}</td>
                                                <td>{{ $sektor['nama_sektor']}}</td>
                                                <td>{{ $sektor['alamat_sektor'] }}</td>
                                                <td>{{ $sektor['nama_kepala_sektor'] }}</td>
                                                <td>
                                                    <a href="{{ route('sektor.edit', $sektor['id']) }}">
                                                        <button type="button" class="btn btn-info rounded-pill">Edit</button>
                                                    </a>
                                                    <form action="{{ route('sektor.destroy', $sektor['id']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger rounded-pill" onclick="return confirm('Anda yakin ingin menghapus Sektor ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                <!-- End Table with stripped rows -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection

</html>
