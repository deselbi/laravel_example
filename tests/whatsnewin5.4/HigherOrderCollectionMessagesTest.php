<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

const NEW_NAME = 'renamed';

class HigherOrderCollectionMessagesTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * First test
     *
     * @return void
     */
    public function testRenanameEachTest()
    {
        // create 10 users
        factory(User::class, 10)->create();

        $first5 = User::all()->take(5);
        $last5 = User::orderBy('created_at', 'desc')->take(5)->get();

        // use long form each method to rename first 5 users
        $first5->each(function($user) {$user->rename(NEW_NAME);} );

        foreach (range(0,4) as $step){
            $this->assertSame( NEW_NAME, $first5[$step]->name);
            $this->assertNotSame( NEW_NAME, $last5[$step]->name);
        }

        // this wont work !!!
        $last5->each->name = NEW_NAME;

        foreach (range(0,4) as $step){
            $this->assertSame( NEW_NAME, $first5[$step]->name);
            $this->assertNotSame( NEW_NAME, $last5[$step]->name);
        }

        // use shortcut for each method to rename last 5 users
        // this will work;
        $last5->each->rename(NEW_NAME);
        foreach (range(0,4) as $step){
            $this->assertSame( NEW_NAME, $first5[$step]->name);
            $this->assertSame( NEW_NAME, $last5[$step]->name);
        }

        // shortcut can be applied on each, filter, map, sum ...
    }

}
