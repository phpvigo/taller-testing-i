<?php

namespace FizzBuzz\Test;

use PHPUnit\Framework\TestCase;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    function setUp() {
        $this->fizzBuzz = $fizzBuzz = new FizzBuzz();
    }

    function test_the_default_answer_is_the_number()
    {
        $this->assertEquals("1", $this->fizzBuzz->of(1));
        $this->assertEquals("2", $this->fizzBuzz->of(2));
    }

    public function test_the_answer_for_multiples_of_three_is_fizz()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->of(3));
        $this->assertEquals("Fizz", $this->fizzBuzz->of(6));
    }

    public function test_the_answer_for_multiples_of_five_is_buzz()
    {
        $this->assertEquals("Buzz", $this->fizzBuzz->of(5));
        $this->assertEquals("Buzz", $this->fizzBuzz->of(10));
    }

    public function test_the_answer_for_multiples_of_five_and_three_is_fizzbuzz()
    {
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->of(15));
    }


}