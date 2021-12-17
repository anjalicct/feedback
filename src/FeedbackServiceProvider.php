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
        $this->loadRoutesFrom(__DIR__.'/routes/feedback.php');
        // $this->publishes([__DIR__.'/routes/feedback.php' => 'routes/'], 'route');
        $this->publishes([__DIR__.'/routes/feedback.php' => 'routes/feedback.php',
        ], 'route');

        $this->loadViewsFrom(__DIR__.'/views', 'feedback');
        $this->publishes([__DIR__.'/views/feedbackform.blade.php' => 'resources/views/feedback/feedbackform.blade.php'],'views');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/database/migrations' => 'database/migrations/'], 'migration');

        $this->publishes([__DIR__.'/FeedbackController' => 'app/http/controllers/'], 'controller');
    }
}
