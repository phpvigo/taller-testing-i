<?php

namespace FizzBuzz\Test;

use PHPUnit\Framework\TestCase;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    function test_the_default_answer_is_the_number() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("1", $fizzBuzz->of(1));
        $this->assertEquals("2", $fizzBuzz->of(2));
    }

    public function test_the_answer_for_three_is_fizz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzBuzz->of(3));
    }


}