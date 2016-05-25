<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('backend.usuarios.principal', ['users' => $users]);
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        $new_password = $request->password;
        $user         = User::findOrFail($user->id);

        $user->fill([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if (!empty($new_password)) {
            $user->password = bcrypt($new_password);
        }

        $user->save();

        return redirect(route('user.index'));
    }

    public function edit(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('backend.usuarios.edit', compact('user'));
    }

    public function update(Requests\UserRequest $request, $id)
    {
        $new_password = $request->password;
        $user         = User::findOrFail($id);

        $user->fill([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if (!empty($new_password)) {
            $user->password = bcrypt($new_password);
        }

        $user->save();
        return redirect(route('user.index'));
    }
}