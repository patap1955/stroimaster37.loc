<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UplodImageController extends Controller
{
    public function upload(Request $request)
    {
        dd($request->all());
        //return json_encode($request);
    }
}
