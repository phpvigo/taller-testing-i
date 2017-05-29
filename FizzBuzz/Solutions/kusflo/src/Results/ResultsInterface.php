<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Results;

interface ResultsInterface
{
    public function check($number);
    
    public function getValue();
}