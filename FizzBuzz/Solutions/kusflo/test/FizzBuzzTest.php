<?php
/**
 * @author Marcos Redondo <kusflo@gmail.com>
 */

namespace FizzBuzz\Test;


use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function testValueOfOneIsOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->getValueOf(1), 1);

    }

}