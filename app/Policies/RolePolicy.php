<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
  
    public function __construct()
    {
        //
    }
    public function vendedor(User $User)
        {
return $user->role_id == '1';
        }
    public function comprador(User $User)
        {
return $user->role_id == '2';
        }
    public function fornecedor(User $User)
        {
return $user->role_id == '3';
        }
        */
}
