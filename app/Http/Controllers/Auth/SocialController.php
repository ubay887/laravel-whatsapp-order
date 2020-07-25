<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Validator, Redirect, Response, File;

use App\Role;
use App\SocialProvider;
use App\User;

class SocialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user(); 
        $user = $this->createUser($getInfo, $provider); 
        auth()->login($user, true); 
        return redirect()->to('/home');
    }

    function createUser($getInfo, $provider)
    {
        $user = User::leftJoin('social_providers', 'users.id', 'social_providers.provider_id')
                    ->where('provider_id', $getInfo->id)->first();
        
        if (!$user) {
            $user = User::where('email', $getInfo->email)->first();
            
            if ($user) {
                $providerName = SocialProvider::where('provider', $provider)
                                            ->where('provider_id', $getInfo->id)
                                            ->first();
                                            
                if (!$providerName) {
                    $this->createProviderId($user, $provider, $getInfo->id);
                }

            } else {
                $user = User::create([
                    'name'          => $getInfo->name,
                    'email'         => $getInfo->email,
                ]);
                $user->roles()->attach(Role::where('name', 'user')->first());
                $this->createProviderId($user, $provider, $getInfo->id);
            }
        }
        
        return $user;
    }

    function createProviderId($user, $provider, $providerId)
    {
        return $user->providers()->save(
            new SocialProvider([
                'provider'      => $provider,
                'provider_id'   => $providerId
            ])
        );
    }

    // Unused function
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('123456dummy')
                ]);
                $newUser->roles()->attach(Role::where('name', 'user')->first());
    
                Auth::login($newUser);
     
                return redirect('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
