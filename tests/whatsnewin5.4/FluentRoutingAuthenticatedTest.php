<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FluentRoutingAuthenticatedTest extends TestCase
{
    use DatabaseMigrations;

    public function testMiddlewareAppliedOnGroupAndRote()
    {
        $user = factory(\App\User::class)->create();
        $this->actingAs($user);
        $response = $this->call('GET', '/protected/throttle');

        $response->assertHeader('X-RateLimit-Limit', 60);
    }
}