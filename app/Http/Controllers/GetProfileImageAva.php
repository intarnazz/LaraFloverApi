<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class GetProfileImageAva extends Controller
{
    public function index($login)
    {
        $path = "public/ava/{$login}.jpg";

        return Response::file(storage_path("app/{$path}"));
    }
}
