<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

interface RulesInterface
{
    public function check($number);
    
    public function getPriority();
    
    public function getValue();
}