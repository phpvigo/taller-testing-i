<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz;

class FizzBuzz
{
    private $manageRules;
    
    public function __construct(ManageRules $manageRules)
    {
        $this->manageRules = $manageRules;
    }
    
    public function getValueOf($number)
    {
        return $this->manageRules->getValueOf($number);
    }
}