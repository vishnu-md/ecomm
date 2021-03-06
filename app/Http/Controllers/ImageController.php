<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_image;
use File;
use Response;

class ImageController extends Controller
{
    public function displayImage($filename)
{
    $path = storage_path('app/public/images/'.$filename);
        if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
}
}
