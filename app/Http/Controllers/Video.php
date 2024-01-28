<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Video extends Controller
{
    public function index($fileName)
    {
        $path = "public/video/{$fileName}";

        return Response::file(storage_path("app/{$path}"));
    }
}
