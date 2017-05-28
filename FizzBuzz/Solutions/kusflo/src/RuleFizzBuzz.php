<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleFizzBuzz implements RulesInterface
{
    private $value;

    public function check($number)
    {
        if (is_numeric($number) && ($number % 3) == 0 && ($number % 5) == 0) {
            $this->value = 'FizzBuzz';

            return true;
        }
        $this->value = '';

        return false;
    }

    public function getValue()
    {
        return $this->value;
    }


}