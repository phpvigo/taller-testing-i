<?php
/**
 * Created by PhpStorm.
 * User: jsrois
 * Date: 26/5/17
 * Time: 13:30
 */

namespace FizzBuzz;


class Number
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isMultipleOf($number) {
        return $this->value % $number == 0;
    }
}