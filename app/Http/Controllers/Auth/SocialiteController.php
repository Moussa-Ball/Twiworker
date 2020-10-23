<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class AuthController Used to authenticate the user via social networks.
 *
 * @category Authentification
 * @package  App\Http\Controllers\Auth
 * @author   Moussa Ball <moiseball20155@gmail.com>
 * @license  https://wwww.twiworker.com Standard
 * @link     https://wwww.twiworker.com
 */
class SocialiteController extends Controller
{
    // Redirect page after login or register via social networks.
    private $redirectTo = '/profile/settings';


    /**
     * Redirect the user to the OAuth Provider.
     *
     * @param string $provider The name of the service provider.
     *
     * @return Response The response obtained from the service provider.
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider,
     * Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in.
     * Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @param string $provider The name of the service provider.
     *
     * @return Response The response obtained from the service provider.
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $trashedUser = User::withTrashed()->where('email', $user->email)->first();
        if (!empty($trashedUser) && $trashedUser->trashed()) {
            return redirect('/login')
                ->with('error', 'This account is inactive and cannot be used. 
                Please contact customer support for further assistance.');
        }

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }


    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     *
     * @param $user Socialite user object.
     * @param string $provider The name of the service provider.
     *
     * @return User The user who is found or created.
     */
    public function findOrCreateUser($user, string $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        $new_user = null;

        if ($authUser) {
            $authUser->provider = $provider;
            $authUser->provider_id = $user->id;
            $authUser->save();
            $this->redirectTo = RouteServiceProvider::HOME;
            return $authUser;
        }

        switch ($provider) {
            case 'google':
                $new_user = User::create([
                    'first_name' => $user['given_name'],
                    'last_name' => $user['family_name'],
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => $provider, // The name of the service provider.
                    'provider_id' => $user->id, // The user id from the service provider.
                    'email_verified_at' => Carbon::now()
                ]);
                break;
            
            case 'facebook':
                // Create new user.
                $new_user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => $provider, // The name of the service provider.
                    'provider_id' => $user->id, // The user id from the service provider.
                    'email_verified_at' => Carbon::now()
                ]);
                break;
        }

        // Mark user as verified.
        $new_user->markEmailAsVerified();

        // Return new user.
        return $new_user;
    }
}
