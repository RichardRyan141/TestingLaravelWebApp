<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunas = Pengguna::withCount('nft')->get();
        return view('pengguna.index', compact('penggunas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penggunas = Pengguna::all();
        return view ('pengguna.create', compact('penggunas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:TabelPengguna,name',
            'password' => 'required|between:8,12|confirmed',
        ],
        [
            'nama.required' => 'Name can\'t be empty!',
            'nama.unique' => 'This name is already taken!',
            'password.required' => 'Password can\'t be empty!',
            'password.between' => 'Password must be between 8 and 12 characters long',
            'password.confirmed' => 'Passwords do not match!',
        ]);

        Pengguna::create([
            'name' => $request->nama,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
