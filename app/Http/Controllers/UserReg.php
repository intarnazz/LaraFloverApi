<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserReg extends Controller
{
    public function index(Request $requesters)
    {
        $users = User::all(['login']);
        $NewUser = new User;
        foreach ($users as $user) {
            if ($user->login == $requesters->login) {
                return response()->json([
                    'code' => 400,
                    'massage' => "This username is already taken"
                ]);
            }
            $NewUser->login = $requesters->login;
            $NewUser->password = $requesters->password;
            $NewUser->save();
            return response()->json([
                'code' => 200,
            ]);
        }
        return response()->json([
            'code' => 500,
        ]);
    }
}
