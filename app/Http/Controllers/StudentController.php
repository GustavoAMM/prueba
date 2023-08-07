<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // solo info del estudiante logueado
        $user = User::find(auth()->user()->id);
        $estudiante = Student::where('user_id', $user->id)->first();
        return view('student.index', compact('user', 'estudiante'));
    }

    public function register(StudentRequest $request)
    {
        $request->validated();
        $user = new User([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'id_role' => 2,
        ]);
    
        $user->save();
        $user_id = $user->id;
    
        $student = new Student([
            'generation' => $request['generation'],
            'classroom' => $request['classroom'],
            'enrollment' => '000' . $user_id,
            'final_grade' => 00.00,
            'user_id' => $user_id,
        ]);
        $student->save();
        return redirect()->intended('teachers');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
