<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SanitizeExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->post('/sanitizing/form', ['name'=> "trim this string     ", 'body' => '']);
        $response->assertStatus(200);
        $json = $response->json();
        $this->assertSame('trim this string', $json['name']);
        $this->assertSame(null, $json['body']);
        $this->assertNull($json['body']);
    }


}
