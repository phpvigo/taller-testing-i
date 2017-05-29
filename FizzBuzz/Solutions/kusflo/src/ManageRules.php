<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;

use FizzBuzz\Prioritys\Priority;
use FizzBuzz\Results\Result;
use FizzBuzz\Rules\RulesInterface;

class ManageRules
{
    protected $rules;
    
    public function __construct()
    {
        $this->addRule(new Rules\Number(Priority::_SEVENTH, Result::_NUMBER));
        $this->addRule(new Rules\ModuleThree(Priority::_SIXTH, Result::_FIZZ));
        $this->addRule(new Rules\ModuleFive(Priority::_FIFTH, Result::_BUZZ));
        $this->addRule(new Rules\ModuleThreeAndFive(Priority::_FOURTH, Result::_FIZZBUZZ));
        $this->addRule(new Rules\NumberThree(Priority::_THIRD, Result::_FIZZ));
        $this->addRule(new Rules\NumberFive(Priority::_SECOND, Result::_BUZZ));
        $this->addRule(new Rules\NumberThreeAndFive(Priority::_FIRST, Result::_FIZZBUZZ));
        $this->sortRulesByPriority();
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
    
    private function sortRulesByPriority()
    {
        usort($this->rules, array($this, "comparation"));
    }
    
    /**
     * @param $a RulesInterface
     * @param $b RulesInterface
     * @return int
     */
    private function comparation($a, $b)
    {
        return strcmp($b->getPriority(), $a->getPriority());
    }
}