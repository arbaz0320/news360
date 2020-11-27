<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
 use Socialite;
 use App\User;

class SocialController extends Controller
{
    public function redirect($provider)
	 {
	     return Socialite::driver($provider)->redirect();
	 }
	 
	 public function callback($provider)
	 {
	   $getInfo = Socialite::driver($provider)->user(); 
	   $user = $this->createUser($getInfo,$provider); 
	   auth()->login($user); 
	   return redirect()->to('/home');
	 }


	 function createUser($getInfo,$provider){
	 $user = User::where('provider_id', $getInfo->id)->first();
	 if (!$user) {
	      $user = User::create([
	         'name'     => $getInfo->name,
	         'email'    => $getInfo->email,
	         'provider' => $provider,
	         'provider_id' => $getInfo->id
	     ]);
	   }
	   return $user;
	 }


	public function redirectToProvider()
	{
	    return Socialite::driver('google')->redirect();
	}

 /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'company.com'){
            return redirect()->to('/');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/home');
    }
}
