<?php


namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\user;
use Illuminate\Http\Request;

class PostUser extends Controller
{
    public function userLogin(Request $request)
    {
        $users = user::all(['name', 'password']);
        foreach ($users as $user) {
            if ($user->name == $request->login && $user->password == $request->password) {
                return response()->json([
                    "code" => 200,
                ]);
            }
        }
        return response()->json([
            "code" => 500,
        ]);
    }
    public function userReg(Request $request)
    {
        $users = user::all(['name']);
        $new_user = new user;
        foreach ($users as $user) {
            if ($user->name == $request->login) {
                return response()->json([
                    "code" => 400,
                    "massage" => "Этот логин уже занят",
                ]);
            }
        }
        // try {
        $new_user->name = $request->login;
        $new_user->email = $request->email;
        $new_user->password = $request->password;

        $new_user->save();
        return response()->json([
            "code" => 200,
        ]);
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         "code" => 500,
        //     ]);
        // }

    }
}