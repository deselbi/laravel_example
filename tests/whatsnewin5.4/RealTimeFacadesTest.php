<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Facades\App\Services\Foo;

class RealTimeFacadesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFooBar()
    {
        $this->assertSame("foo bar executed", Foo::execute());
    }


}
