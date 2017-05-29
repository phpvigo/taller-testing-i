<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class NumberFive extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        return in_array(5, str_split($number));
    }
}