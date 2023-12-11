<?php

namespace App\Http\Controllers;

use App\Models\listPegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = listPegawai::orderBy('nama','asc')->paginate(5);
        return view('index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'posisi'=>'required',
            'gaji'=>'required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'posisi'=>$request->posisi,
            'gaji'=>$request->gaji,
        ];
        listpegawai::create($data);
        return redirect()->to('pegawai');
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
        $data = listpegawai::where('nama',$id)->first();
       return view('edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'posisi'=>'required',
            'gaji'=>'required',
        ]);
        $data = [
            'nama'=>$request->nama,
            'posisi'=>$request->posisi,
            'gaji'=>$request->gaji,
        ];
        listpegawai::where('nama',$id)->update($data);
        return redirect()->to('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
