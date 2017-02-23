<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * First test
     *
     * @return void
     */
    public function testOneTest()
    {
        $this->assertTrue(true);
        $first = factory(User::class, 10)->create();

        $users =   User::all();

        $this->assertCount(10, $users);

    }

}
