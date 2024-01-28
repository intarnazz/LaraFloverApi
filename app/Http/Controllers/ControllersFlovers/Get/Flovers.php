<?php

namespace App\Http\Controllers\ControllersFlovers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flover;
use Illuminate\Support\Facades\Response;


class Flovers extends Controller
{
    public function floversAll()
    {
        $flovers = Flover::all(['id', 'name', 'price',]);
        $res = [];
        foreach ($flovers as $flover) {
            $res[$flover['id']] = [
                'name' => $flover['name'],
                'price' => $flover['price'],
            ];
        }
        return response()->json($res);
    }

    public function floverImage($name)
    {
        return Response::file(storage_path("app/public/flovers/{$name}.png"));
    }
}