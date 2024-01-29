<?php


namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\user;
use Illuminate\Http\Request;

class GetUser extends Controller
{
    public function index()
    {
        $users = user::all(['id', 'name', 'password']);
        $res = [];
        foreach ($users as $value) {
            $res[$value["id"]] = [
                "name" => $value["name"],
                "password" => $value["password"],
            ];
        }
        return response()->json($res);
    }
}