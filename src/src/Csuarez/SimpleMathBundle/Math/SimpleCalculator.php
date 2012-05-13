<?php
namespace Csuarez\SimpleMathBundle\Math;

use Csuarez\SimpleMathBundle\Math\CalculatorException;


/**
 * A simple calculator.
 */
class SimpleCalculator {
	/**
	 * Adds two numbers.
	 * @param int $a First number.
	 * @param int $b Second numer.
	 * @return int The addition result.
	 */
	public function add($a, $b) {
		return $a + $b;
	}

	/**
	 * Subtracts two numbers.
	 * @param int $a First number.
	 * @param int $b Second numer.
	 * @return int The subtraction result.
	 */
	public function subtract ($a, $b) {
		return $a - $b;
	}

	/**
	 * Multiplies two numbers.
	 * @param int $a First number.
	 * @param int $b Second numer.
	 * @return int The multiplication result.
	 */
	public function multiply ($a, $b) {
		return $a * $b;
	}

	/**
	 * Divides two numbers.
	 * @param int $a First number.
	 * @param int $b Second numer.
	 * @return int The division result.
	 * @throws CalculatorException if $b is equal to zero.
	 */
	public function divide ($a, $b) {
		if ($b == 0) {
			throw new CalculatorException();
		}
		return $a / $b;
	}
}
?>