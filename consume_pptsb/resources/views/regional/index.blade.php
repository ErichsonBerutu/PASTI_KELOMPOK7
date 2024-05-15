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
        }
        .btn {
            margin-right: 10px;
        }
        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 pagetitle">
                    <h1>Regional</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Regional</li>
                        </ol>
                    </nav>
                    <div>
                        <a href="{{ route('regional.add') }}">
                            <button type="button" class="btn btn-warning rounded-pill">Tambah</button>
                        </a>
                    </div>
                </div><!-- End Page Title -->
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Regional</h5>
                                    <!-- Table with stripped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Regional</th>
                                                    <th scope="col">Nama Regional</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Nama Kepala Regional</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $regional)
                                                <tr>
                                                    <td>{{ $regional['kode_regional'] }}</td>
                                                    <td>{{ $regional['nama_regional']}}</td>
                                                    <td>{{ $regional['alamat'] }}</td>
                                                    <td>{{ $regional['nama_kepala_regional'] }}</td>
                                                    <td>
                                                        <a href="{{ route('regional.edit', $regional['ID']) }}">
                                                            <button type="button" class="btn btn-info rounded-pill">Edit</button>
                                                        </a>
                                                        <form action="{{ route('regional.destroy', $regional['ID']) }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger rounded-pill" data-confirm-delete="true">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table with stripped rows -->
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
