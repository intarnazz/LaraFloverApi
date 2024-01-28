<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GetComment extends Controller
{
    public function index($id)
    {
        $Coments = Coment::all(['id', 'text', 'video_id', 'login']);
        $res = [];
        foreach ($Coments as $Comment) {
            if ($Comment['video_id'] == $id) {
                $res[$Comment['id']] = [
                    'text' => $Comment['text'],
                    'user' => $Comment['login'],
                ];
            }
        }

        return response()->json($res);
    }
}
