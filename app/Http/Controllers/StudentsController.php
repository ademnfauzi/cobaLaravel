<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request;

        //metode kek ci
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->npm = $request->npm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        //metode lain
        //panggil model trs create
        // Student::create([
        //     'nama' => $request->nama,
        //     'npm' => $request->npm,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        //validasi laravel
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:5',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());

        return redirect('/students')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return $student;
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:5',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        
        Student::where('id',$student->id)
                ->update([
                    'nama' => $request->nama,
                    'npm' => $request->npm,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/students')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/students')->with('status','Data Berhasil Dihapus!');
    }
}
