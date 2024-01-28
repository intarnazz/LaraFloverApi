<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GetVideoById extends Controller
{
    public function index($id) {
        $Videos = Video::all(['id', 'name', 'fileName', 'autor', 'like','dis_like']);
        $res = [];
        foreach ($Videos as $video) {
            if ($video["id"] == $id) {
                $res[$video["id"]] = [
                    "name" => $video["name"],
                    "fileName" => $video["fileName"],
                    "autor" => $video["autor"],
                    "like" => $video["like"],
                    "dislike" => $video["dis_like"],
                ];
            }
        }

        return response()->json($res);
    }
}
