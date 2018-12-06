<?php
/**
 * Test all the Facade methods
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Tests;

use AaronSaray\LaravelSimpleFeature\Facades\Feature;

/**
 * Class FacadeTest
 * @package AaronSaray\LaravelSimpleFeature\Tests
 */
class FacadeTest extends TestCase
{
    public function testCan(): void
    {
        $this->assertTrue(Feature::can('yodel'));
        $this->assertFalse(Feature::can('cheering-for-yodel'));
    }

    public function testOn(): void
    {
        $this->assertTrue(Feature::on('yodel'));
        $this->assertFalse(Feature::on('cheering-for-yodel'));
    }

    public function testOff(): void
    {
        $this->assertFalse(Feature::off('yodel'));
        $this->assertTrue(Feature::off('cheering-for-yodel'));
    }
}