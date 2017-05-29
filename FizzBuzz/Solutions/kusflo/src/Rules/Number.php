<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class Number implements RulesInterface
{
    public function check($number)
    {
        return (is_numeric($number));
    }
}