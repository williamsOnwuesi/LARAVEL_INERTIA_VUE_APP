<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class VueProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $date = "06-10-2023";

        return Inertia::render("Home", [
            "date" => $date
        ]);
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
        dd($request::file('user_image'));

        $image_path = $request::file('user_image')->store();

        User::create([
            'user_name' => $request::input('user_name'),
            'image_path' => $image_path,
        ]);

        return redirect('profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
