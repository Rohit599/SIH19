<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\User;

class SocialAuthController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service)
    {
        $user = Socialite::with($service)->user();
        $u_id = User::select('id')->where('email', $user->email)->first();
        if (empty($u_id)) {
            $u['name'] = $user->name;
            $u['email'] = $user->email;
            return redirect('register')->with(['u' => $u]);
        }

        Auth::loginUsingId($u_id->id);
        return redirect('/');
    }
}
