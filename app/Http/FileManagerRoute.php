<?php

namespace App\Http;

use Illuminate\Http\Request;
use UniSharp\LaravelFilemanager\Lfm;

class FileManagerRoute
{
    public static function upload(Request $request)
    {
        dd($request->file('upload'));
    }
}
