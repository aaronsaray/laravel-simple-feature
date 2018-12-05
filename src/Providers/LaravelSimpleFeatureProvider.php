<?php
/**
 * Laravel Simple Feature Provider
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Providers;

use AaronSaray\LaravelSimpleFeature\Contracts\LaravelSimpleFeatureServiceContract;
use AaronSaray\LaravelSimpleFeature\Services\LaravelSimpleFeatureService;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelSimpleFeatureProvider
 * @package AaronSaray\LaravelSimpleFeature\Providers
 */
class LaravelSimpleFeatureProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootPublishableFiles();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerMergedConfig();
        $this->registerService();
    }

    /**
     * Boot in the publishable files
     */
    protected function bootPublishableFiles(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/laravel-simple-feature.php' => config_path('laravel-simple-feature.php'),
            ], 'config');
        }
    }

    /**
     * Merge in our current config with what we allow them to publish/change
     */
    protected function registerMergedConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/laravel-simple-feature.php', 'laravel-simple-feature'
        );
    }

    /**
     * Registers all of the PHPLoC functionality
     */
    protected function registerService(): void
    {
        $this->app->bind(LaravelSimpleFeatureServiceContract::class, function() {
            return new LaravelSimpleFeatureService($this->app['config']);
        });
    }
}
