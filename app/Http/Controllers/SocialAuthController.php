<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver( $service )->redirect ();
    }

    public function callback($service) {
        $user = Socialite::with( $service )->user ();
        // dd($user->getName());
        return view( 'home' )->with( compact('user') )->withService( $service );
    }
}
