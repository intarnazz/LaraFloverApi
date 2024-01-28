<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class PostComment extends Controller
{
    public function index(Request $requesters)
    {
        $coment = new coment;
        $users = User::all();
        foreach ($users as $user) {
            if ($user->login == $requesters->login && $user->password == $requesters->password) {
                $coment->text = $requesters->comment_text;
                $coment->login = $requesters->login;
                $coment->video_id = $requesters->post_id;

                $coment->save();
            }
        }

        return response()->json([
            'code' => 200,
        ]);
    }
}
