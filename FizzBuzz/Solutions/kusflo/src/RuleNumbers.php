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
        $this->value = $number;

        return (is_numeric($this->value));
    }

    public function getValue()
    {
        return $this->value;
    }


}