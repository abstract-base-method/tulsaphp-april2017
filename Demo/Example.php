<?php

/**
 * Created by PhpStorm.
 * User: james
 * Date: 4/17/17
 * Time: 5:46 PM
 */
interface Example
{
    public function Demo(string $String): bool;

    public function Thing(bool ...$Variables): array;
}