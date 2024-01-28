<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GetUserByLogin extends Controller
{
    public function index($login)
    {
        $code = 500;
        $users = User::all(['login']);
        foreach ($users as $user) {
            if ($user['login'] == $login) {
                $code = 200;
                break;
            }
        }
        return response()->json([
            "code" => $code,
        ]);
    }
}
