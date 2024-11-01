<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisteredUserController extends Controller
{
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
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // dd($request->all());

        $userAttributes = $request->validate([
            'name' => ['required'],
            // 'email' => ['required', 'email', 'unique:users, email'],
            'email' => ['required'],
            'password' => ['required', Password::min(6)],
        ]);


        $employerAttributes = $request->validate([
            'employer' => ['required'],
            // 'logo' => ['required', File::types(['png', 'jpg'])],
            'logo' => ['required'],
        ]);

        $user = User::create($userAttributes);

        // $logoPath = $request->logo->store('logos');
        // Store the logo file
        $logoPath = "";
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos');
        }

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

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
