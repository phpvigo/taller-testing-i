<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz  * */
    private $fizzbuzz;
    
    public function setUp()
    {
        $this->fizzbuzz = new FizzBuzz();
        parent::setUp();
    }
    
    public function testValueIsNumber()
    {
        $this->assertEquals(1, $this->fizzbuzz->getValueOf(1));
        $this->assertEquals(2, $this->fizzbuzz->getValueOf(2));
        $this->assertEquals(4, $this->fizzbuzz->getValueOf(4));
    }
    
    public function testValueIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizzbuzz->getValueOf(3));
        $this->assertEquals('Fizz', $this->fizzbuzz->getValueOf(6));
        $this->assertEquals('Fizz', $this->fizzbuzz->getValueOf(9));
    }
    
    public function testValueIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzbuzz->getValueOf(5));
        $this->assertEquals('Buzz', $this->fizzbuzz->getValueOf(10));
        $this->assertEquals('Buzz', $this->fizzbuzz->getValueOf(20));
    }
    
    public function testValueIsFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->getValueOf(15));
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->getValueOf(60));
    }
    
    public function testValueHasNumberThreeIsFizz()
    {
        $this->assertEquals('Fizz', $this->fizzbuzz->getValueOf(30));
    }
    
    public function testValueHasNumberFiveIsBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzbuzz->getValueOf(45));
    }
    
    public function testValueHasNumbersThreeAndFiveIsFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->getValueOf(35));
    }
}