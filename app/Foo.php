<?php

namespace App;

use App\Events\FooWasCreated;
use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{

    protected $events = [
        'created' => FooWasCreated::class
    ];
}
