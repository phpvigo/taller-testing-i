<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleFizz implements RulesInterface
{
    const _VALUE = 'Fizz';

    public function check($number)
    {
        return (is_numeric($number) && ($number % 3) == 0);
    }

    public function getValue()
    {
        return self::_VALUE;
    }


}