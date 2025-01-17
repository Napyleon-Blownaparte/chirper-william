<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;

class ChirpPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Chirp $chirp): bool
    {
        //
        return $chirp->user()->is($user);
    }

    public function delete(User $user, Chirp $chirp): bool
    {
        //
        return $this->update($user, $chirp);
    }
}
