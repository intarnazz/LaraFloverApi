<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class GetVideo extends Controller
{
    public function index()
    {
        $Videos = Video::all(['id', 'name', 'fileName', 'autor']);
        $res = [];
        foreach ($Videos as $video) {
            $res[$video["id"]] = [
                "name" => $video["name"],
                "fileName" => $video["fileName"],
                "autor" => $video["autor"],
            ];
        }

        return response()->json($res);
    }
}
