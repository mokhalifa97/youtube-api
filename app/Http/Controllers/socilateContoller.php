<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class socilateContoller extends Controller
{
    public function RedirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function HandleGoogleCallback(){
        try{
            $user= Socialite::driver('google')->user();
            $findUser=User::where('social_id',$user->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect()->route('home');
            }else{
                $newUser=User::create([
                'name' => $user->name,
                'email' => $user->email,
                'social_id' => $user->id,
                'social_type' => 'google',
                'password' => Hash::make('my-google')
                ]);
                Auth::login($newUser);
                return redirect()->route('home');
            }
        } catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
