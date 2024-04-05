<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SiswaController extends Controller
{
    public function index()
    {
        // $data = Siswa::all();
        // return $data;

        return response([
            'message' => 'Data berhasil ditampilkan',
            'data' => Siswa::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        return response([
            'message' => 'Data berhasil ditambah',
            'data' => Siswa::create($validator)
        ], 201);
    }

    public function show(string $id)
    {
        try {
            return response([
                'message' => 'Data berhasil ditampilkan',
                'data' => Siswa::FindOrFail($id)
            ], 304);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Data tidak ditemukan',
                'data' => Siswa::find($id)
            ], 400);
        }

    }


    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'message' => 'Data berhasil Diubah',
            'data' => $data
        ], 200);
    }


    public function destroy(string $id)
    {
        Siswa::find($id)->delete($id);

        return response([
            'message' => 'Data berhasil Dihapus'
        ], 200);
    }
}
