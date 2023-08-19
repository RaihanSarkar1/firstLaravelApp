<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }
    public function addView()
    {
        return view('user.create');
    }

    public function store(UserAddRequest $request)
    {
        if (User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ])) {
            return redirect('home')->with('success', 'User Saved');
        } else {
            return redirect()->back()->with('errors', 'User not saved');
        }
    }

    public function checkEmail(Request $request)
    {
        $email = $request->email;
        $is_exists = User::where('email', $email)->first();
        if (!$is_exists) {
            return true;
        } else {
            return false;
        }
    }
}
