<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Results;

class Fizz extends AbstractResult implements ResultsInterface
{
    const _VALUE = 'Fizz';
    
    public function check($number)
    {
        return $this->rule->check($number);
    }
    
    public function getValue()
    {
        return self::_VALUE;
    }
}