<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 24.2.17.
 * Time: 19.20
 */

namespace App\Services;


class Foo
{
    protected $bar;

    /**
     * Foo constructor.
     * @param $bar
     */
    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function execute(){
        return $this->bar->execute();
    }


}