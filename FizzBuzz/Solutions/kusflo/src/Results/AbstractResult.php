<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Results;

use FizzBuzz\Rules\RulesInterface;

class AbstractResult
{
    protected $rule;
    
    public function __construct(RulesInterface $rule)
    {
        $this->rule = $rule;
    }
}