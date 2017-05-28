<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleBuzz implements RulesInterface
{
    private $value;

    public function check($number)
    {
        if (is_numeric($number) && ($number % 5) == 0) {
            $this->value = 'Buzz';

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