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
        $this->assertEquals($fizzbuzz->getValueOf(1), 1);
        $this->assertEquals($fizzbuzz->getValueOf(2), 2);
        $this->assertEquals($fizzbuzz->getValueOf(4), 4);
    }

    public function testValueIsFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->getValueOf(3), 'Fizz');
    }

}