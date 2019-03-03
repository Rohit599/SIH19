<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required_unless:contact_no', 'string', 'email', 'max:255', 'unique:users'],
            // 'contact_no1' => ['required_unless:email', 'number', 'min:60000000000', 'max:9999999999'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = new User;
        $user->name = $request->input('name');
        if ($request->input('email') !== "") {
            $user->email = $request->input('email');
        }
        if ($request->input('contact_no1') !== "") {
            $user->mob = $request->input('contact_no1');
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Auth::loginUsingId($user->id);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                return redirect(url('/'));
        } else if (Auth::attempt(['mob' => $request->input('contact_no'), 'password' => $request->input('password')])) {
            return redirect(url('/'));
        } else {
            return back()->with(['msg' => 'The email/password is invalid', 'class' => 'alert-danger']);
        }
    }
}
