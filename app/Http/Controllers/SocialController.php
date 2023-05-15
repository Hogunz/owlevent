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

    //key:driver => value:user_attributes
    private $social = [
        'google' => 'google_id',
        'facebook' => 'fb_id',
    ];

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    public function socialiteRedirect($driver)
    {
        return $this->socialite->driver($driver)->redirect();
    }

    public function loginWithSocialite($driver)
    {
        try {
            $status = 'Success';
            $success = true;
            $message = '';

            $user = $this->socialite->driver($driver)->user();
            $isUser = User::where($this->social[$driver], $user->id)->first();

            //for linking accounts
            if (Auth::user()) {
                if ($isUser) {
                    //cannot link to auth user
                    $status = 'Error';
                    $success = false;
                    $message = $driver . ' has already linked to another account!';
                } else {
                    //update driver account to auth user
                    Auth::user()->update([
                        $this->social[$driver] => $user->id,
                    ]);
                    $message = $driver . ' has been successfully linked!';
                }
            } else {
                if ($isUser) {
                    //log in user
                    Auth::login($isUser);

                    $message = 'Login Successful! Close the window to proceed';
                } else {
                    //create new user for this driver
                    $createUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        $this->social[$driver] => $user->id,
                        'password' => Hash::make(Str::random(20)),
                    ]);

                    $message = 'Successfully registered! Close the window to proceed';

                    Auth::login($createUser);
                }
            }

            // return redirect()->back();

        } catch (Exception $e) {
            // dd($e->getMessage());
            $status = 'Error';
            $success = false;
            $message = 'There seems to be an error in the server';
            // $message = $e->getMessage();
        } finally {
            return view('auth.auth-successful', [
                'status' => $status,
                'success' => $success,
                'message' => $message,
            ]);
        }
    }

    // public function googleRedirect()
    // {
    //     return $this->socialite->driver('google')->redirect();
    // }

    // public function loginWithGoogle()
    // {
    //     try {

    //         $user = $this->socialite->driver('google')->user();
    //         $isUser = User::where('google_id', $user->id)->first();

    //         if ($isUser) {
    //             if (Auth::id() == $isUser->id) {
    //                 if (Auth::user()->google_id == null) {
    //                     Auth::user()->update([
    //                         'google_id' => $user->id
    //                     ]);
    //                 }
    //             } else {
    //                 Auth::login($isUser);
    //             }
    //         } else {
    //             $createUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'google_id' => $user->id,
    //                 'password' => Hash::make(Str::random(20)),
    //             ]);

    //             Auth::login($createUser);
    //         }

    //         return redirect()->back();
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //     }
    // }
}
