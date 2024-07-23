<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

    public function create()
    {
        $judul = request()->input('judul');
        $penulis = request()->input('penulis');
        $penerbit = request()->input('penerbit');
        $isbn = request()->input('isbn');
        $tahun_terbit = request()->input('tahun_terbit');

        $result = app('db')->table('buku')->insert([
            'judul' => $judul,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'isbn' => $isbn,
            'tahun_terbit' => $tahun_terbit,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return response()->json([
            'message' => 'Buku created',
            'code' => 200,
        ]);
    }

    public function index()
    {
        $buku = app('db')->table('buku')->get();

        return response()->json([
            'data' => $buku,
            'code' => 200,
        ]);
    }

    public function show($id)
    {
        $buku = app('db')->table('buku')->where('id', $id)->first();

        return response()->json([
            'data' => $buku,
            'code' => 200,
        ]);
    }

    public function update($id)
    {
        $judul = request()->input('judul');
        $penulis = request()->input('penulis');
        $penerbit = request()->input('penerbit');
        $isbn = request()->input('isbn');
        $tahun_terbit = request()->input('tahun_terbit');

        $result = app('db')->table('buku')->where('id', $id)->update([
            'judul' => $judul,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'isbn' => $isbn,
            'tahun_terbit' => $tahun_terbit,
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return response()->json([
            'message' => 'Buku updated',
            'code' => 200,
        ]);
    }

    public function delete($id)
    {
        $result = app('db')->table('buku')->where('id', $id)->delete();

        return response()->json([
            'message' => 'Buku deleted',
            'code' => 200,
        ]);
    }
}