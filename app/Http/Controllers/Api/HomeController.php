<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function delete_image(Request $request)
    {
        //dd($request->all());
        return response()->json([
            "status"=> "success",
        ]);
    }
}
