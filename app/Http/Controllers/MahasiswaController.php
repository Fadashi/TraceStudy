<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswa = User::query();

        if ($request->has('search')) {
            $mahasiswa->where(function($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->input('search') . '%')
                      ->orWhere('email', 'LIKE', '%' . $request->input('search') . '%');
            });
        }

        $mahasiswa = $mahasiswa->paginate(5);

        return view('mahasiswa.index', compact('mahasiswa'));
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
