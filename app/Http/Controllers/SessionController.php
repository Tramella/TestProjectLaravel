<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
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
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //

    //     $attributes = request()->validate([
    //         'email' => ['required'],
    //         'password' => ['required'],
    //     ]);

    //     if (! Auth::attempt($attributes)) {
    //         throw ValidationException::withMessages([
    //             'email' => 'Sorry, those credentials do not match',
    //         ]);

    //         $requestE->session()->regenerate();

    //         return redirect('/');
    //     }
    // }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'], // Optionally add 'email' validation
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($attributes)) {
            // Regenerate the session to prevent session fixation
            $request->session()->regenerate();

            // Redirect to the intended page (or home)
            return redirect('/'); // Redirect to homepage or another route
        }

        // If authentication fails, throw a validation exception
        throw ValidationException::withMessages([
            'email' => 'Sorry, those credentials do not match',
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //

        Auth::logout();
        return redirect('/');
    }
}
