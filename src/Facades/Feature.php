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
 * @method static boolean can(string $feature)
 * @method static boolean on(string $feature)
 * @method static boolean off(string $feature)
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