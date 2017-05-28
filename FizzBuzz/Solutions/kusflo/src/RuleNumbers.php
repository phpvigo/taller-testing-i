<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class RuleNumbers implements RulesInterface
{
    private $value;

    public function check($number)
    {
        if (is_numeric($number)) {
            $this->value = $number;

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