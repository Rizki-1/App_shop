<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\DaftarRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login');
    }

    public function daftar()
    {
        return view('Daftar');
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
    public function store(DaftarRequest $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'user'
            ]);
            return to_route('login');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function Loging(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'superadmin') {
                return redirect()->route('SuperAdminHome');
            }
            return to_route('userHome');
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'Kombinasi email dan password salah.',
            ]);
        }
    }

    public function Logout(Request $request)
    {
        $guard = Auth::guard();
        $guard->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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
