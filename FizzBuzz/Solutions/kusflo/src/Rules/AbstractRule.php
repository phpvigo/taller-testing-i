<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Rules;

class AbstractRule
{
    protected $priority;
    protected $result;
    
    public function __construct($priority, $result)
    {
        $this->priority = $priority;
        $this->result = $result;
    }
    
    public function getPriority()
    {
        return $this->priority;
    }
    
    public function getValue()
    {
        return $this->result;
    }
}