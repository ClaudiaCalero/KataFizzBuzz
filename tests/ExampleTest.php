<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {

	public function test_returns_fizz_if_is_3_multiple()
	 {
		 $num = 9;
		//given
		$fizzbuzz = new FizzBuzz();
		//when
		$result = $fizzbuzz->execute($num);
		//then
		$this->assertEquals("Fizz", $result);
	}
}



