<?php

namespace App\Policies;

use App\Photo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function view(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    

    public function update(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }

    public function delete(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }


    
    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function restore(User $user, Photo $photo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Photo  $photo
     * @return mixed
     */
    public function forceDelete(User $user, Photo $photo)
    {
        //
    }
}
