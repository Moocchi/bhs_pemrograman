<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::connection('mysql')->table('users')->get();
        return response()->json($query, 200);
    }

    public function get_user_token(Request $request, $id){
        $user = User::where('id', $id)->get();

        if ($user){
            $response['success'] = 'true';
            $response['message'] = $user;
            $response['data'] = $user;
            return response()->json($response, 200);
        } else {
            $response['success'] = 'false';
            $response['message'] = 'cannot find User';
            return response()->json($response);
        }
    }
}