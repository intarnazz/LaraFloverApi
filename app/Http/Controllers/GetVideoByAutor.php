<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class GetVideoByAutor extends Controller
{
    public function index($autor) {
        $Videos = Video::all(['id', 'name', 'fileName', 'autor']);
        $res = [];
        foreach ($Videos as $video) {
            if ($video["autor"] == $autor) {
                $res[$video["id"]] = [
                    "name" => $video["name"],
                    "fileName" => $video["fileName"],
                    "autor" => $video["autor"],
                ];
            }
        }

        return response()->json($res);
    }
}
