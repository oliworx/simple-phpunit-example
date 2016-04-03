<?php
class Primes
{
    public function isPrime(int $n) {
		if ($n < 2 ) return false;

		for ( $i = 2; $i * $i <= $n; $i++) {
			if ($n % $i == 0) return false;
		}
		return true;
    }

}
