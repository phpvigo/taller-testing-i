<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Test;


use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function testValueIsNumber()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals(1, $fizzbuzz->getValueOf(1));
        $this->assertEquals(2, $fizzbuzz->getValueOf(2));
        $this->assertEquals(4, $fizzbuzz->getValueOf(4));
    }

    public function testValueIsFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->getValueOf(3));
        $this->assertEquals('Fizz', $fizzbuzz->getValueOf(6));
        $this->assertEquals('Fizz', $fizzbuzz->getValueOf(9));
    }

}