<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SettingController extends Controller
{
    public function index()
    {
        $users = User::latest()->where('role', '!=', 'superAdmin')->get();


        return view('Admin.pages.settings', compact('users'));
    }


    public function store (Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:255'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);


        return redirect()->back();
    }

    public function update ( Request $request, User $user)
    {


    $user = User::findOrFail($request->id);


        $user->update($request->all());

        return redirect()->back();
    }

    public function destroy(String $id)
    {
        $id = User::find($id);

        $id->delete();
        toast('Service delete successfully', 'success');


        return redirect()->back();
    }

}
