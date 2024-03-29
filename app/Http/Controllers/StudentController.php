<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ['students' => Student::with(['user'])->get()];

        return view('student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('student.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->validated();
        // dd($request->all());
        $user = User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'role'      => 'student',
        ]);

        $student = Student::create([
            'user_id'       => $user->id,
            'nisn'          => $request->nisn,
            'kelas'         => $request->kelas, 
            'gender'        => $request->gender, 
            'address'       => $request->address, 
        ]);

        if($user && $student){
            return redirect()->back()->with(['success' => 'Data Siswa baru berhasil ditambahkan!']);
        }else{
            return redirect()->back()->with(['failed' => 'Data siswa gagal ditambahkan!']);
        }

        // try {
        //     Student::create($request->validated());

        //     return redirect()->back()->with(['success' => 'Data Siswa baru berhasil ditambahkan']);
        // }

        // catch (Exception $e) {
        //     return redirect()->back()->with(['failed' => $e]);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = [
            'student' => $student
        ];
        return view('student.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // return $request->validated();
        try {
            $student->update($request->validated());

            return redirect()->back()->with(['success' => 'Data Siswa berhasil diubah']);
        }

        catch (Exception $e) {
            return redirect()->back()->with(['failed' => $e]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (!$student) {
            return redirect()->route('student.index')->with(['failed' => 'Siswa tidak berhasil dihapus']);
        }

        $student->delete();
        return redirect()->route('student.index')->with(['success' => 'Siswa berhasil dihapus']);
    }
}
