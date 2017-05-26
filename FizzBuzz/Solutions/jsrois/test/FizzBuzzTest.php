<?php

namespace FizzBuzz\Test;

use PHPUnit\Framework\TestCase;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    function test_the_answer_for_one_is_one() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("1", $fizzBuzz->of(1));
    }
}