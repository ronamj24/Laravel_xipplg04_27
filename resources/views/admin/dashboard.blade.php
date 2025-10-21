@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid mt-4">
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">
        <!-- Card contoh -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Selamat Datang</h5>
                    <p class="card-text">
                        Selamat datang di panel admin <b>Dilesin Academy</b>
                    </p>
                </div>
            </div>
        </div>

        <!-- Card contoh lainnya -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Info Cepat</h5>
                    <p class="card-text">Dashboard siap digunakan untuk mengelola konten.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contoh tabel -->
    <div class="card shadow-sm mt-3">
        <div class="card-header">
            Statistik Pengguna
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rona Miftahuljannah</td>
                        <td>rona@example.com</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Admin 2</td>
                        <td>admin2@example.com</td>
                        <td>Nonaktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
