<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

      // Auth gates for: Menu
      Gate::define('menu_access', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('menu_create', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('menu_edit', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('menu_delete', function ($user) {
        return in_array($user->role_id, [1]);
      });

      // Auth gates for: Slides
      Gate::define('slide_access', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('slide_create', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('slide_edit', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('slide_delete', function ($user) {
        return in_array($user->role_id, [1]);
      });

      // Auth gates for: Advantages
      Gate::define('advantage_access', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('advantage_create', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('advantage_edit', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('advantage_delete', function ($user) {
        return in_array($user->role_id, [1]);
      });

      // Auth gates for: Catalog
      Gate::define('catalog_access', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('catalog_create', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('catalog_edit', function ($user) {
        return in_array($user->role_id, [1]);
      });
      Gate::define('catalog_delete', function ($user) {
        return in_array($user->role_id, [1]);
      });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
