<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', $user->email)->first();

            if ( $finduser ) {

                Auth::login($finduser);

                return redirect()->intended('/');

            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => '12345'// you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);

                Auth::login($newUser);

                return redirect()->intended('/dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
