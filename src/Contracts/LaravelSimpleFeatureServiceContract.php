<?php
/**
 * Interface for the service
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Contracts;

/**
 * Interface LaravelSimpleFeatureServiceContract
 * @package AaronSaray\LaravelSimpleFeature\Contracts
 */
interface LaravelSimpleFeatureServiceContract
{
    /**
     * Can we do this feature?
     *
     * @param string $feature
     * @return bool
     */
    public function can(string $feature): bool;

    /**
     * Is this feature on?
     *
     * @param string $feature
     * @return bool
     */
    public function on(string $feature): bool;

    /**
     * Is this feature off?
     *
     * @param string $feature
     * @return bool
     */
    public function off(string $feature): bool;
}