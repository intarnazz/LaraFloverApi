<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddUser extends Controller
{
    public function index()
    {
        $user = new User;

        // Заполняем поля данными
        $user->login = 'Lara';
        $user->password = '123';
        
        // Сохраняем пользователя в базу данных
        $user->save();

        return 'AddUser';
    }
}