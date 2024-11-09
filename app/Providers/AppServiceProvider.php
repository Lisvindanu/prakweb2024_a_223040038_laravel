<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(true);
        if (Schema::hasTable('posts')) {
            \DB::statement('PRAGMA foreign_keys = ON');
        }

        Blade::directive('imgslash', function ($expression) {
            return "<?php echo asset('img/' . $expression); ?>";
        });

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
