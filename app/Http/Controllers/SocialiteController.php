<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialiteController extends Controller
{
   public function redirect_to_github () {
        return Socialite::driver('github')->redirect();
        
    }

    public function callback_from_github(){
        $user= Socialite::driver('github')->user();
        $finduser = User::where('social_id',$user->id)->first();
        if($finduser){
            Auth::login($finduser);
        }
        else{
            $new_user = User::create([
                'first_name' => $user->name,
                'last_name' => '',
                'email'=> $user->email,
                'social_id' => $user->id,
                'social_type' => 'github',
                'password' => Hash::make($user->password),
            ]);
            Auth::login($new_user);
            return redirect('/login');
        }
    }

    public function redirect_to_google(){
        return Socialite::driver('google')->redirect();
    }

    public function callback_from_google(){
        $user = Socialite::driver('google')->user();
        $finduser = User::where('social_id',$user->id)->first();
        if($finduser){
            Auth::login($finduser);
        }
        else{
            $new_user = User::create([
                'first_name' => $user->name,
                'last_name' => '',
                'email'=> $user->email,
                'social_id' => $user->id,
                'social_type' => 'google',
                'password' => Hash::make($user->password),
            ]);
            Auth::login($new_user);
            return redirect('/login');
        }
    }








}
