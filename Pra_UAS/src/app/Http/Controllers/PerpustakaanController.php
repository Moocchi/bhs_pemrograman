<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::connection('mysql')->table('perpustakaans')->get();
        return response()->json($product);
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
        $this->validate($request, [
            'judul' => 'required|string',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'ISBN' => 'required|string',
            'tahun_terbit' => 'required|string',
            'jumlah_buku' => 'required|string',
            'tanggal_dipinjam' => 'required|string',
            'tanggal_dikembalikan' => 'required|string',
            'status' => 'required|string'
        ]);
        $product = [
            'judul' => $request->input('judul'),
            'pengarang' => $request->input('pengarang'),
            'penerbit' => $request->input('penerbit'),
            'ISBN' => $request->input('ISBN'),
            'tahun_terbit' => $request->input('tahun_terbit'),
            'jumlah_buku' => $request->input('jumlah_buku'),
            'tanggal_dipinjam' => $request->input('tanggal_dipinjam'),
            'tanggal_dikembalikan' => $request->input('tanggal_dikembalikan'),
            'status' => $request->input('status'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ];
        $id = DB::connection('mysql')->table('perpustakaans')->insertGetid($product);
        $data = DB::connection('mysql')->table('perpustakaans')->where('id', $id)->first();
        $response = [
            'message' => 'true',
            'message' => 'Books Created',
            'date' => $product
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Perpustakaan::find($id);

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'ISBN' => 'required|string',
            'tahun_terbit' => 'required|string',
            'jumlah_buku' => 'required|string',
            'tanggal_dipinjam' => 'required|string',
            'tanggal_dikembalikan' => 'required|string',
            'status' => 'required|string'
        ]);
        
        $data = Perpustakaan::find($id);
        
        if($data){
            $data->judul = $request->input('judul');
            $data->pengarang = $request->input('pengarang');
            $data->penerbit = $request->input('penerbit');
            $data->ISBN = $request->input('ISBN');
            $data->tahun_terbit = $request->input('tahun_terbit');
            $data->jumlah_buku = $request->input('jumlah_buku');
            $data->tanggal_dipinjam = $request->input('tanggal_dipinjam');
            $data->tanggal_dikembalikan = $request->input('tanggal_dikembalikan');
            $data->status = $request->input('status');
            $data->updated_at = \Carbon\Carbon::now()->toDateTimeString();
            $data->save();
            return response()->json([
                'success' => 'true',
                'message' => 'Data Updated',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'success' => 'false',
                'message' => 'Data Not Found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpustakaan $perpustakaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perpustakaan  $perpustakaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Perpustakaan::find($id);
        if($data){
            $data->delete();
            return response()->json([
                'success' => 'true',
                'message' => 'Data Deleted',
            ]);
    }else{
        return response()->json([
            'success' => 'false',
            'message' => 'Data Not Found',
        ]);
    }
    }
}
