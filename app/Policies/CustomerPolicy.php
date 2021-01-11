<?php

namespace App\Policies;

use App\Models\Costumer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costumer  $costumer
     * @return mixed
     */
    public function view(User $user, Costumer $costumer)
    {
        return in_array($user->email,[
            'admin@admin.com',
        ]);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->email,[
            'admin@admin.com',
        ]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costumer  $costumer
     * @return mixed
     */
    public function update(User $user, Costumer $costumer)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costumer  $costumer
     * @return mixed
     */
    public function delete(User $user, Costumer $costumer)
    {
        return in_array($user->email,[
            'admin@admin.com',
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costumer  $costumer
     * @return mixed
     */
    public function restore(User $user, Costumer $costumer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Costumer  $costumer
     * @return mixed
     */
    public function forceDelete(User $user, Costumer $costumer)
    {
        //
    }
}
