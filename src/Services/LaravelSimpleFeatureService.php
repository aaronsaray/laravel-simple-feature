<?php
/**
 * The service for Laravel Simple Feature
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Services;

use AaronSaray\LaravelSimpleFeature\Contracts\LaravelSimpleFeatureServiceContract;
use Illuminate\Contracts\Config\Repository as ConfigContract;

/**
 * Class LaravelSimpleFeatureService
 * @package AaronSaray\LaravelSimpleFeature\Services
 */
class LaravelSimpleFeatureService implements LaravelSimpleFeatureServiceContract
{
    /**
     * @var ConfigContract 
     */
    protected $config;

    /**
     * LaravelSimpleFeatureService constructor.
     * @param ConfigContract $config
     */
    public function __construct(ConfigContract $config)
    {
        $this->config = $config;
    }

    /**
     * Can we do this feature?
     * 
     * @param string $feature
     * @return bool
     */
    public function can(string $feature): bool
    {
        return (bool) $this->config->get('laravel-simple-feature.' . $feature);
    }

    /**
     * Is this feature on?
     *
     * @param string $feature
     * @return bool
     */
    public function on(string $feature): bool
    {
        return $this->can($feature);
    }

    /**
     * Is this feature off?
     *
     * @param string $feature
     * @return bool
     */
    public function off(string $feature): bool
    {
        return !$this->can($feature);
    }
}