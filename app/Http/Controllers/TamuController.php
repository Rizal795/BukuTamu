<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tamu::all();
        return view('pages.tamu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tamu.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Tamu::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nope' => $request->nope,
            'keperluan' => $request->keperluan,
            'data' => $request->data,
        ]);

        if ($data) {
            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(Tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tamu::findOrFail($id);
        return view('pages.tamu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Tamu::findOrFail($id);

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nope = $request->nope;
        $data->keperluan = $request->keperluan;
        $data->data = $request->data;

        $data->update();

        if ($data) {
            return redirect()->route('index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tamu::where('id', $id)->delete();
        // $data->delete();

        if ($data) {
            return response()->json(['success' => 'Data berhasil di hapus']);
        }
    }
}
