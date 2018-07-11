<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PhotoController extends Controller
{
    public function photo(Request $request){
        $path = storage_path() . '/photo/' . $request->filename;
        $image = Image::make($path);
        return $image->response();
    }
}
