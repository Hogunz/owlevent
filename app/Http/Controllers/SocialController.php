<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\Factory as Socialite;


class SocialController extends Controller
{
    public $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    public function facebookRedirect()
    {
        return $this->socialite->driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {

            $user = $this->socialite->driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if ($isUser) {
                if (Auth::id() == $isUser->id) {
                    if (Auth::user()->fb_id == null) {
                        Auth::user()->update([
                            'fb_id' => $user->id
                        ]);
                    }
                } else {
                    Auth::login($isUser);
                }
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => Hash::make(Str::random(20)),
                ]);

                Auth::login($createUser);
            }

            return redirect()->back();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
