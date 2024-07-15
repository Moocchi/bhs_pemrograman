<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::connection('mysql')->table('customers')->get();
        return response()->json($data, 200);
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
            'name' => 'required|string'
        ]);
        $product = [
            'name' => $request->input('name'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ];
        $id = DB::connection('mysql')->table('customers')->insertGetid($product);
        $data = DB::connection('mysql')->table('customers')->where('id', $id)->first();
        $response = [
            'message' => 'true',
            'message' => 'customer Created',
            'date' => $product
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Customer::find($id);
        if($data){
            return response()->json([
                'success' => 'true',
                'message' => 'Data Retrieve',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'success' => 'false',
                'message' => 'Parameter Not Found',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $data = Customer::find($id);
        if($data){
        $data->name = $request->input('name');
        $data->save();

        
        return response()->json([
            'success' => 'true',
            'message' => 'Data Updated',
            'data' => $data,
        ]);
        }else{
            return response()->json([
                'success' => 'true',
                'message' => 'Error Updated',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Customer::find($id);
        if($data){
            $data ->delete();
            return response()->json([
                'success' => 'true',
                'message' => 'Berhasil di Hapus',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'success' => 'false',
                'message' => 'Parameter Not Found',
            ]);
        }
    }
}
