<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;


class ImageController extends Controller
{
    public function store()
    {
        $info = new Info();
        $info->id = 0;
        $info->exists = true;
        $image = $info->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl('thumb')
        ]);
    }
        
}
