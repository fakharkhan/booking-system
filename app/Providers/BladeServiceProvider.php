<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{

    public function includeField($view,$expression)
    {
        if (!$expression) {
            $expression = [];
        }

        return "<?php echo \$__env->make('{$view}',[$expression], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>";

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Blade::directive('text', function ($expression) {
            return  $this->includeField('controls.form.text',$expression);
        });
    }
}
