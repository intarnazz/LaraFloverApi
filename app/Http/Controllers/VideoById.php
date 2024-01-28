<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class VideoById extends Controller
{
    public function index($id)
    {
        $Videos = Video::all(['id', 'name', 'fileName', 'autor']);
        $fileName = "";
        foreach ($Videos as $video) {
            if ($video['id'] == $id) {
                $fileName = $video["fileName"];
            }
        }
        $path = "public/video/{$fileName}";

        return Response::file(storage_path("app/{$path}"));
    }
}
