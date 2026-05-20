<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Nasabah</title>
</head>
<body>

    <div class="container">

        @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                <!-- <span aria-hidden="true">&times;</span>/ -->
            </button>
        </div>
        @endif

        @if(session('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismis="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card mt-5">
            <div class="card-header text-center">
                Data Nasabah
            </div>
            <div class="card-body">
                <a href="{{ route('nasabah.tambah') }}" class="btn btn-primary">Input Nasabah</a>
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th>No. Rekening</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Saldo</th>
                    </thead>
                    <tbody>
                        @foreach($nasabah as $n)
                        <tr>
                            <td>{{ $n['no_rekening'] }}</td>
                            <td>{{ $n['nik'] }}</td>
                            <td>{{ $n['nama'] }}</td>
                            <td>{{ $n['alamat'] }}</td>
                            <td>{{ $n['no_hp'] }}</td>
                            <td>{{ $n['saldo'] }}</td>
                            <td>
                                <a href="/nasabah/edit{{ $n->id }}" class="btn btn-warning">Edit</a>
                                <a href="nasabah/hapus{{ $n->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>