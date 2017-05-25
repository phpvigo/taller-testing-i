<?php

namespace FizzBuzz;

class FizzBuzz {

	public function produceList() {
		return range(1,100);
	}

	/**
	 * Make substitutions in the array $list as follows:
	 * - Si un número divisible por 3 se reemplazará por 'Fizz'
	 * - Si un número es divisible por 5 se reemplazará por 'Buzz'
	 * - Un número divisible por 3 y por 5 se reemplazará por 'FizzBuzz'
	 * 
	 * @param array $list
	 * @return array
	 */
	public function substituteList($list) {
		$substitutions = $list;
		foreach($substitutions as $i => $elem) {
			$substitutions[$i] = $this->processElement($elem);
		}
		return $substitutions;
	}
	/**
	 * Substitute the element, if needed with the kata rules:
	 * - Si un número divisible por 3 se reemplazará por 'Fizz'
	 * - Si un número es divisible por 5 se reemplazará por 'Buzz'
	 * - Un número divisible por 3 y por 5 se reemplazará por 'FizzBuzz'
	 * 
	 * @param int $elem
	 * @return int
	 */
	protected function processElement($elem) {
		$substitution = null;
		if($elem % 3 == 0) {
			$substitution .= 'Fizz';
		}
		if($elem % 5 == 0) {
			$substitution .= 'Buzz';
		}
		return $substitution ?? $elem;
	}

}