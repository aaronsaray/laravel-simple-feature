<?php
/**
 * Feature Facade
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Facades;

use AaronSaray\LaravelSimpleFeature\Contracts\LaravelSimpleFeatureServiceContract;
use Illuminate\Support\Facades\Facade;

/**
 * Class Feature
 * @package AaronSaray\LaravelSimpleFeature\Facades
 * @method static boolean can(string $uri)
 * @method static boolean on(string $uri)
 * @method static boolean off(string $uri)
 */
class Feature extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return LaravelSimpleFeatureServiceContract::class;
    }
}