<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as ModelsRole;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit','update');
    }
    
    public function index()
    {
        $users=User::all();
        return view('admin.users.index', compact('users'));
    }

    
    public function edit(User $user)
    {
        $roles = ModelsRole::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user)->with('info', 'Se asignó los roles correctamente');
    }
}
