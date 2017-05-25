<?php

namespace FizzBuzz\Test;

use \FizzBuzz\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
	/**
	 * "En la kata FizzBuzz se debe producir un listado de números"
	 */
    public function testMustProduceAListOfNumbers() {
		$fizzBuzz = new FizzBuzz();
		$list = $fizzBuzz->produceList();
		$this->assertTrue(is_array($list),"FizzBuzz doesn't produce a list");
		foreach($list as $elem) {
			$this->assertTrue(is_numeric($elem),"'$elem' should be a number");
		}
	}
}