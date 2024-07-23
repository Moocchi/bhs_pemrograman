<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PinjamBukuController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

    public function create()
    {
        $user_id = request()->input('user_id');
        $buku_id = request()->input('buku_id');
        $tanggal_pinjam = request()->input('tanggal_pinjam');
        $tanggal_kembali = request()->input('tanggal_kembali');

        $result = app('db')->table('user_buku')->insert([
            'user_id' => $user_id,
            'buku_id' => $buku_id,
            'tanggal_pinjam' => $tanggal_pinjam,
            'tanggal_kembali' => $tanggal_kembali,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return response()->json([
            'message' => 'Peminjaman dibuat',
            'code' => 200,
        ]);
    }

    public function index()
    {
        $buku = app('db')->table('user_buku')->get();

        return response()->json([
            'data' => $buku,
            'code' => 200,
        ]);
    }

    public function show($id)
    {
        $buku = app('db')->table('user_buku')->where('id', $id)->first();

        return response()->json([
            'data' => $buku,
            'code' => 200,
        ]);
    }

    public function update($id)
    {
        $user_id = request()->input('user_id');
        $buku_id = request()->input('buku_id');
        $tanggal_pinjam = request()->input('tanggal_pinjam');
        $tanggal_kembali = request()->input('tanggal_kembali');

        $result = app('db')->table('user_buku')->where('id', $id)->update([
            'user_id' => $user_id,
            'buku_id' => $buku_id,
            'tanggal_pinjam' => $tanggal_pinjam,
            'tanggal_kembali' => $tanggal_kembali,
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return response()->json([
            'message' => 'Peminjaman updated',
            'code' => 200,
        ]);
    }

    public function delete($id)
    {
        $result = app('db')->table('user_buku')->where('id', $id)->delete();

        return response()->json([
            'message' => 'Peminjaman deleted',
            'code' => 200,
        ]);
    }
}