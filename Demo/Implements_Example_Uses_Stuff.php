<?php

/**
 * Created by PhpStorm.
 * User: james
 * Date: 4/17/17
 * Time: 5:48 PM
 */
class Implements_Example_Uses_Stuff implements Example
{
    use Stuff;

    public function Demo(string $String): bool
    {
        return (is_string($this->other_thing($String))? true : false);
    }

    public function Thing(bool ...$Variables): array
    {
        return $Variables;
    }
}