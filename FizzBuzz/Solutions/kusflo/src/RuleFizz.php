<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleFizz implements RulesInterface
{
    private $value;

    public function check($number)
    {
        if (is_numeric($number) && ($number % 3) == 0) {
            $this->value = 'Fizz';

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