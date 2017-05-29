<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class Number extends AbstractRule implements RulesInterface
{
    private $value;
    
    public function check($number)
    {
        $this->value = $number;
        
        return (is_numeric($number));
    }
    
    public function getValue()
    {
        return $this->value;
    }
}