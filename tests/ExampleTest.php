<?php

namespace Kevinkoenen\NovaShopper\Tests;

use Orchestra\Testbench\TestCase;
use Kevinkoenen\NovaShopper\NovaShopperServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [NovaShopperServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
