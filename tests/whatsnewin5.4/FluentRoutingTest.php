<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FluentRoutingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFluentRouting()
    {
        $response = $this->call('GET', 'fluent/route');
        $response->assertStatus(200);
    }


    public function testFluentRouteNaming()
    {
        $url = route('fluentroute');
        $this->assertStringEndsWith('fluent/route', $url);
    }

    public function testMiddlewareAppliedOnGroup()
    {
        $response = $this->call('GET', '/protected');
        $response->assertStatus(302);
    }

}