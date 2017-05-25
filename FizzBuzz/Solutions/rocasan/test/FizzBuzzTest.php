<?php

namespace FizzBuzz\Test;

use \FizzBuzz\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
	
	protected $fizzBuzz;
	
	public function setUp() {
		$this->fizzBuzz = new FizzBuzz();
	}
	
	/**
	 * "En la kata FizzBuzz se debe producir un listado de números"
	 */
    public function testMustProduceAListOfNumbers() {
		$list = $this->fizzBuzz->produceList();
		$this->assertTrue(is_array($list),"FizzBuzz doesn't produce a list");
		foreach($list as $elem) {
			$this->assertTrue(is_numeric($elem),"'$elem' should be a number");
		}
	}
	
	/**
	 * Kata: "algunos de los cuales serán sustituidos por cadenas de acuerdo con las siguientes condiciones"
	 */
	public function testSubstitutions() {
		$this->assertEquals(
			[1,2,"Fizz",4,"Buzz","Fizz",7,8,"Fizz","Buzz",11,"Fizz",13,14,"FizzBuzz",16,17,"Fizz",19,"Buzz"], 
			$this->fizzBuzz->substituteList([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20])
		);
	}
	
}