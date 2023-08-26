<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\data_siswa;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = data_siswa::all();
        return view('datasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];

        data_siswa::create($data);
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
        $data = data_siswa::findorfail($id);
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datasiswa = data_siswa::findorfail($id);
        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];

        $datasiswa->update($data);
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = data_siswa::findorfail($id);
        $data->delete();
        return redirect('/');
    }
}