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
        $this->addRule(new RuleNumbers());
        $this->addRule(new RuleFizz());
        $this->addRule(new RuleBuzz());
        $this->addRule(new RuleFizzBuzz());
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
    
    private function addRule($rule)
    {
        $this->rules [] = $rule;
    }
}