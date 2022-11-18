<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UsersController
{
    public function index()
    {
        $users = Auth::user();

        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserFormRequest $request)
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);
        $data['password_confirmation'] = Hash::make($data['password_confirmation']);

        $user =  User::create($data);
        Auth::login($user);

        return redirect()->route('series.index');
    }
}
