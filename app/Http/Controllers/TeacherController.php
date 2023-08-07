<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // usuario autenticado
        $user = auth()->user();
        $students = Student::all();
        return view('teacher.index', compact('user', 'students'));
        //return view('teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('teacher.showStudents', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // editar notas del estudiante
         $student = Student::find($id);
         return view('teacher.updateStudents', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
{
    $request->validated();
    $student = Student::find($id);
    $user = $student->user;

    $userData = [
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
    ];

    $user->update($userData);

    $studentData = [
        'generation' => $request->input('generation'),
        'classroom' => $request->input('classroom'),
        'final_grade' => $request->input('final_grade'),
    ];

    $student->update($studentData);

    return redirect()->route('teachers');
}

    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
