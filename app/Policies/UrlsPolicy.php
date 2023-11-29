<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Urls;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UrlsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Urls  $urls
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Urls $urls)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Urls  $urls
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Urls $urls)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Urls  $urls
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Urls $urls)
    {
        if ($user instanceof Admin) {
            return true;
        }

        return $user->id === $urls->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Urls  $urls
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Urls $urls)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Urls  $urls
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Urls $urls)
    {
        //
    }
}
