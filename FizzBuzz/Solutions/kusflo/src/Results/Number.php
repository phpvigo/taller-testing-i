<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Results;

class Number extends AbstractResult implements ResultsInterface
{
    private $value;
    
    public function check($number)
    {
        $this->value = $number;
        
        return $this->rule->check($number);
    }
    
    public function getValue()
    {
        return $this->value;
    }
}