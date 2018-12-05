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
}