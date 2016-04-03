<?php
class Primes
{
    public function isPrime(int $n) {
		for ( $i = 2; $i * $i <= $n; $i++) {
			if ($n % $i == 0) return false;
		}
		return true;
    }

}
