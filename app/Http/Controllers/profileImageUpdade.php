<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;

class profileImageUpdade extends Controller
{
    public function store(Request $request)
    {
        if ($request->file('ava') != null) {
            $originalFileName = $request->file('ava')->getClientOriginalName();
            $path = $request->file('ava')->storeAs('ava', $originalFileName, 'public');
        } else if ($request->file('header') != null) {
            $originalFileName = $request->file('header')->getClientOriginalName();
            $path = $request->file('header')->storeAs('header', $originalFileName, 'public');
        }
        return response()->json([
            'code' => 200,
            'login' => $request['login'],
            'password' => $request['password'],
            'ava' => $path,
        ]);
    }
}
