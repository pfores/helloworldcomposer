<?php

namespace Com\Iesebre\Dam2\paufores\helloworldcomposer;

use Faker\Factory;

/**
 * Created by PhpStorm.
 * User: pau
 * Date: 6/10/15
 * Time: 19:32
 */
class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function sayHello()
    {
        echo "Hello " . $this->faker->name . "!\n";
    }

}