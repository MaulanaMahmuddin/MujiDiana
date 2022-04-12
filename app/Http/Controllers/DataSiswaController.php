<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataSiswa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataSiswa = new DataSiswa;
        $dataSiswa->nama_siswa = $request->nama_siswa;
        $dataSiswa->umur = $request->umur;
        $dataSiswa->kelas = $request->kelas;
        $dataSiswa->n_orangtua = $request->n_orangtua;
        $dataSiswa->save();

        return response()->json([
            'data'=> $dataSiswa,
            'message' => "Data telah ditambahkan"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $dataSiswa)
    {
        return $dataSiswa->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $dataSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_siswa = $request->nama_siswa;
        $umur = $request->umur;
        $kelas = $request->kelas;
        $n_orangtua = $request->n_orangtua;

        $dataSiswa = DataSiswa::find($id);
        $dataSiswa->nama_siswa = $nama_siswa;
        $dataSiswa->umur = $umur;
        $dataSiswa->kelas = $kelas;
        $dataSiswa->n_orangtua = $n_orangtua;
        $dataSiswa->save();

        return response()->json([
            'data'=> $dataSiswa,
            'message' => "Data telah diedit"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $data = DataSiswa::find($request->id);
        if($data->delete()){
            return response()->json([
                'message'=> "Data Berhasil diHapus"
            ]);
        }else{
            return response()->json([
                'message'=> "data tidak berhasil ditambahkan"
            ]);
        }

    }
}
