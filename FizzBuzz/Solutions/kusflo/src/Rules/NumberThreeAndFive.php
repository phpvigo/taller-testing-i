<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class NumberThreeAndFive extends AbstractRule implements RulesInterface
{
    public function check($number)
    {
        $array = str_split($number);
        
        return (in_array(3, $array) and in_array(5, $array));
    }
}