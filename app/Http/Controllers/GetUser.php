<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GetUser extends Controller
{
    public function index()
    {
        $users = User::all(['id', 'login', 'password']);
        $res = [];
        foreach ($users as $value) {
            $res[$value["id"]] = [
                "login" => $value["login"],
                "password" => $value["password"],
            ];
        }
        return response()->json($res);
    }
}