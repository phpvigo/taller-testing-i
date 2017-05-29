<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class NumberThree extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        return in_array(3, str_split($number));
    }
}