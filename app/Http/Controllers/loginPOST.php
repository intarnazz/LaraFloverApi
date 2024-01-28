<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class loginPOST extends Controller
{
    public function index(Request $request)
    {
        // $postData = $request->all();
        // $users = User::all(['login', 'password']);
        // $code = 500;
        // if ($postData['login']) {
        //     foreach ($users as $user) {
        //         if ($user['login'] == $postData['login'] && $user['password'] == $postData['password']) {
        //             $code = 200;
        //         }
        //     }
        // }
        return response()->json([
            'code' => 200,
        ]);
    }
}
