<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class GetProfileImageHeader extends Controller
{
    public function index($login)
    {
        $path = "public/header/{$login}.jpg";

        return Response::file(storage_path("app/{$path}"));
    }
}
