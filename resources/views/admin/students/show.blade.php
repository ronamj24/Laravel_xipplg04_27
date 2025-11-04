@extends('layouts.admin')

@section('title', 'Detail Siswa')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Detail Siswa</h2>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $student->id }}</td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>{{ $student->nis }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $student->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $student->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>NISN</th>
                    <td>{{ $student->nisn }}</td>
                </tr>
            </table>

            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
