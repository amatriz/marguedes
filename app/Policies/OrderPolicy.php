<?php

namespace App\Policies;

use App\User;
user App\order;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
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
    public function getOrder(User $User, order $order)
    {
    
        return $user->id == $order->user_id;
    }
*/
}
