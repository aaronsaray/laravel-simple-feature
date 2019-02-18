<?php
/**
 * Test the blade directive
 */
declare(strict_types=1);

namespace AaronSaray\LaravelSimpleFeature\Tests;

/**
 * Class BladeTest
 * @package AaronSaray\LaravelSimpleFeature\Tests
 */
class BladeTest extends TestCase
{
    public function testViewFeatureDirective(): void
    {
        $rendered = (string) view('feature');
        
        $this->assertContains('I can yodel', $rendered);
        $this->assertContains('Other info here', $rendered);
        $this->assertContains('I am not cheering', $rendered);
    }
}