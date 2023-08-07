<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Login a user.
     */
    public function login(LoginRequest $request)
    {
        try {
            $data = $request->validated();

            if (Auth::attempt($data)) {
                $user = Auth::user();

                if ($user->id_role == 1) {
                    // retornar la vista
                    return redirect()->intended('teachers');
                } elseif ($user->id_role == 2) {
                    return redirect()->intended('students');
                }
            }

            return back()->withErrors([
                'data-error' => 'Credenciales incorrectas',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al iniciar sesión',
                'error' => $e->getMessage(),
            ]);
        }
    }
    public function register(Request $request)
    {

        $user = new User([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'id_role' => $request['user_type'] == 'alumno' ? 2 : 1,
        ]);

        $user->save();
        $user_id = $user->id;

        if ($request['user_type'] === 'alumno') {
            $student = new Student([
                'user_id' => $user_id,
                'enrollment' => '000' . $user_id,
                'classroom' => $request['classroom'],
                'final_grade' => 00.00,
                'generation' => $request['generation'],
            ]);
            $student->save();
            return redirect('/');

        } elseif ($request['user_type'] === 'maestro') {
            $teacher = new Teacher([
                'user_id' => $user_id,
                'address' => $request['address'],
                'phone' => $request['phone'],
                'subject' => $request['subject'],
                'seniority' => 'nuevo ingreso',
            ]);
            $teacher->save();
        return redirect('/');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
