<?php


namespace App\Http\Controllers;


use App\Requests\UserPostRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function get(){
        return User::all();
    }

    public function post(UserPostRequest $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
}