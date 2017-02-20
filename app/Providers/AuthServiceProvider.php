<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\user;
use App\permission;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
     'App\order' => 'App\Policies\OrderPolicy',
     'App\User' => 'App\Policies\RolePolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
       /* $permissions =  permission::with('roles')->get();
         
        foreach ($permissions as $permission)
        {
            $gate->define($permission->name, function(User $user) use ($permission)
                {
                    return $user->hasPermission($permission);
                }
        );
        }
        
        $gate->before(function(User $user, $ability){
            
            if ( $user->hasAnyRoles('adm') )
                return true;
            
        });*/
    }
}