<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Like extends Controller
{
    public function index($id, Request $request)
    {
        $video = Video::find($id);

        $delta = $request->input('delta');
        $event = $request->input('event');

        $video->$event += $delta;

        $video->save();
        return response()->json(
            [
                $video,
                Video::find($id)
            ]
        );
    }
}
