<?php

namespace Kusflo;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $fizzbuzz;
    
    protected function setUp()
    {
        $this->fizzbuzz = new FizzBuzz();
    }
    
    /** @test */
    public function firstNumberIsOne()
    {
        $value = $this->fizzbuzz->getValue();
        $this->assertEquals(1, $value);
    }
}