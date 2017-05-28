<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;


class FizzBuzz
{
    private $rules;

    public function __construct()
    {
        $this->rules [] = new RuleNumbers();
        $this->rules [] = new RuleFizz();
    }


    public function getValueOf($number)
    {
        $value = null;
        /** @var $rule RulesInterface */
        foreach ($this->rules as $rule) {
            if ($rule->check($number)) {
                $value = $rule->getValue();
            }
        }

        return $value;
    }
}