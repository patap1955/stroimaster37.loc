<?php

namespace App\Http\Controllers\Admin;

use Dan\UploadImage\UploadImage;
use Dan\UploadImage\Exceptions\UploadImageException;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UploadImageController extends Image
{
    public function uploader(Request $request)
    {
        $errorMessage = 'Произошла ошибка при загрузке';
        if ($request->has('upload')) {
            $imgName = $request->file('upload')->getClientOriginalName();
            $newImgName = time() . $imgName;
            $uri = '/storage/uploads/' . $newImgName;
            if (self::make($request->file('upload')->getRealPath())->save(public_path() . $uri)) {
                return response()->json([
                    "uploaded" => 1,
                    "fileName" => '/uploads/',
                    "url" => $uri
                ]);
            }
            $errorMessage = 'Ошибка!!! Размер файла должен быть не больше 2Mb. И допустимые расширения .jpg, .png, .gif';
        }
        return response()->json([
            "uploaded" => 1,
            'error' => [
                'message' => $errorMessage,
            ],
        ]);
    }
}

