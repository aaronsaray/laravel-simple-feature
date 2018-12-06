<?php
/**
 * The Test Case Defaults
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Tests;

use AaronSaray\LaravelSimpleFeature\Providers\LaravelSimpleFeatureProvider;

/**
 * Class TestCase
 * @package AaronSaray\LaravelSimpleFeature\Tests
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [LaravelSimpleFeatureProvider::class];
    }
}