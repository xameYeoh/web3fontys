<?php

namespace App\Policies;

use App\Profile;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //!
    }
    public function update(User $user, Profile $profile)
    {
        return $profile->user_id == $user->id;
    }

//    public function create(User $user)
//    {
//        //return !(Profile::where('user_id', '=', $user->id)->exists());
//        return true;
//    }
}
