<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Results;

class Buzz extends AbstractResult implements ResultsInterface
{
    const _VALUE = 'Buzz';
    
    public function check($number)
    {
        return $this->rule->check($number);
    }
    
    public function getValue()
    {
        return self::_VALUE;
    }
}