<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MyuserController extends Controller
{
    public function index() {
        $user = User::all();
        return view ('users.index', compact('user'));
    }

    public function edit($userId) {
        $user = User::find($userId);
        return view('users.edit', compact('user'));
    }

    public function update(User $user) {
        $password = Hash::make(request('password'));

             $user->name = request('name');
             $user->phone = request('phone');
             $user->email = request('email');
             $user->dept = request('dept');
             $user->password = $password;

        $user->save();

        return redirect('/users');
    }

    public function destroy(User $user) {
        // dd($user);
        $user->delete();
        return redirect('/users');        
    }
}
