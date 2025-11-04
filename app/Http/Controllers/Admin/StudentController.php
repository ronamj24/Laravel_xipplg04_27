<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students = \App\Models\Student::all();
    return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nis' => 'required|unique:students',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'nisn' => 'required|unique:students',

    ]);

    Student::create($request->all());
    return redirect()->route('admin.students.index')->with('success', 'Data berhasil disimpan!');

    }
    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
{
    // Validasi input — untuk field unik kita ignore id student saat ini
    $validated = $request->validate([
        'nis' => 'required|unique:students,nis,' . $student->id,
        'nama_lengkap' => 'required|string|max:255',
        'jenis_kelamin' => 'required|in:L,P',
        'nisn' => 'required|unique:students,nisn,' . $student->id,
    ]);

    // Update record
    $student->update($validated);

    // Redirect kembali dengan pesan sukses
    return redirect()->route('admin.students.index')->with('success', 'Data siswa berhasil diupdate!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $student = \App\Models\Student::findOrFail($id);
    $student->delete();

    return redirect()->route('admin.students.index')
                     ->with('success', 'Data siswa berhasil dihapus!');
    }
}
