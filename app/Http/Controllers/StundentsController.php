<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StundentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // Student::create([
        //     'nama' => $request->nama,
        //     'npm' => $request->npm,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // Validasi data
        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required|email',
        ]);

        Student::create($request->all());
        return redirect('/students')->with('status','Data berhasil ditambahkan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("student.edit", compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // Validasi data
        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required|email',
        ]);

        
        Student::where('id', $student->id)
            -> update([
                'nama'      => $request->nama,
                'npm'       => $request->npm,
                'email'     => $request->email,
                'jurusan'   => $request->jurusan
            ]);

        return redirect('/students')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil dihapus');
    }
}
