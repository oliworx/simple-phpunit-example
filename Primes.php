<?php

class Primes
{
    public $steps = 0;

    public function isPrime($n)
    {
        $this->steps = 0;
        if ($n == 2) {
            return true;
        }
        if ($n < 2 || $n % 2 == 0) {
            return false;
        }

        for ($i = 3; $i * $i <= $n; $i += 2) {
            $this->steps++;
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

}
