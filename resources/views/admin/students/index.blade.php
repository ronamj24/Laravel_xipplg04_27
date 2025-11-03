@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="container-fluid p-4">
    <h3 class="mb-4 fw-bold">Dashboard</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3 fw-semibold">Data Siswa</h4>

            <a href="{{ route('admin.students.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>NISN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="text-center">{{ $student->id }}</td>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->nama_lengkap }}</td>
                            <td>{{ $student->jenis_kelamin }}</td>
                            <td>{{ $student->nisn }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.students.show', $student->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
