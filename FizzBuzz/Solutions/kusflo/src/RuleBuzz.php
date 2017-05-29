<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;

class RuleBuzz implements RulesInterface
{
    const _VALUE = 'Buzz';
    
    public function check($number)
    {
        return ($number % 5 == 0);
    }
    
    public function getValue()
    {
        return self::_VALUE;
    }
}