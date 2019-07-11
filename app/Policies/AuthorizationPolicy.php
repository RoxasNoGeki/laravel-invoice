<?php

namespace App\Policies;

use Auth;
use Illuminate\Validation\ValidationException;

class AuthorizationPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return bool
     */
    public function logged(){
        if(!Auth::check()){
            $error = ValidationException::withMessages([
               'user' => [config()->get('errors.unauthorized')],
            ]);
            throw $error;
        }
        return true;
    }
}
