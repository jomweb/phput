<?php namespace JomWeb;

use InvalidArgumentException;

class Calculator {

	public function add($x, $y)
	{
		if ( ! is_int($x) or ! is_int($y))
		{
			throw new InvalidArgumentException("Please provide a set of integers");
		}
		return $x + $y;
	}
}