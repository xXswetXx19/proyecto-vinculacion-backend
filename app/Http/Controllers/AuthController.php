<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::all();
        return response($auth, 200);
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
        $auth = new Auth();
        $auth->username = $request->username;
        $auth->password = $request->password;
        $auth->save();
        return response($auth, 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $username)
    {
        $auth = Auth::where('username', $username)->first();
        return response($auth, 200);
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
