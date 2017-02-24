<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BladeComponentsAndSlotsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testComponents()
    {
        $response = $this->call('GET', 'blade-components-and-slots/components');
        $response->assertSee("Header Message");
        $response->assertSee("Different Header Message");
        $response->assertSee("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum");
        $response->assertSee("default slot text");
    }



}