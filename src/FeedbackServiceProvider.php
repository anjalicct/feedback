<?php

namespace Anjalicct\Feedback;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Anjalicct\Feedback\FeedbackController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([__DIR__.'/routes/feedback.php' => resource_path('routes/')], 'route');

        $this->loadViewsFrom(__DIR__.'/views', 'feedback');
        $this->publishes([__DIR__.'/views' => resource_path('resources/views/feedback/')],'views');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/database/migrations' => resource_path('database/migrations/')], 'migration');

        $this->publishes([__DIR__.'/FeedbackController' => 'app/http/controllers/'], 'controller');
    }
}
