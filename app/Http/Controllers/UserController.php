<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $models = User::all();
        return view('user.index', compact('models'));
    }

    public function store(UserStoreRequest $request)
    {
        User::create($request->all());
        return redirect()->route('user.index');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'nullable|max:255',
            'email' => 'nullable|email|max:255',
            'password' => 'nullable|min:8|max:20',
            'repassword' => 'nullable|same:password',
        ]);
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        // dd($user);
        $user->delete();
        return redirect()->route('user.index');
    }
}
