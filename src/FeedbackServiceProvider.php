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
        dd([__DIR__.'/./../routes/']);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->publishes([__DIR__.'/routes/feedback.php' => 'routes/'], 'route');
        $this->publishes([__DIR__.'/routes/web.php' => 'routes/feedback.php'], 'route');

        $this->publishes([__DIR__.'/./../../routes/' => 'routes/',], 'routes');

        $this->loadViewsFrom(__DIR__.'/views', 'feedback');
        $this->publishes([__DIR__.'/views' => 'resources/views/'],'views');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/database/migrations' => 'database/migrations/'], 'migration');

        $this->publishes([__DIR__.'/FeedbackController' => 'app/http/controllers/'], 'controller');
    }
}
