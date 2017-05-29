<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;

use FizzBuzz\Results\ResultsInterface;

class FizzBuzz
{
    private $results;
    
    public function __construct()
    {
        $this->addResult(new Results\Number(new Rules\Number()));
        $this->addResult(new Results\Fizz(new Rules\ModuleThree()));
        $this->addResult(new Results\Buzz(new Rules\ModuleFive()));
        $this->addResult(new Results\FizzBuzz(new Rules\ModuleThreeAndFive()));
        $this->addResult(new Results\Fizz(new Rules\NumberThree()));
        $this->addResult(new Results\Buzz(new Rules\NumberFive()));
        $this->addResult(new Results\FizzBuzz(new Rules\NumberThreeAndFive()));
    }
    
    public function getValueOf($number)
    {
        $value = null;
        /** @var $result ResultsInterface */
        foreach ($this->results as $result) {
            if ($result->check($number)) {
                $value = $result->getValue();
            }
        }
        
        return $value;
    }
    
    private function addResult($result)
    {
        $this->results [] = $result;
    }
}