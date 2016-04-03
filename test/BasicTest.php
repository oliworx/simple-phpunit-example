<?php
include 'Primes.php';

class BasicTest extends PHPUnit_Framework_TestCase
{

    public function testCheckPrime()
    {
    	// Arrange
        $a = new Primes();
        // Act
        $prim = $a->isPrime(179424691);
        // Assert
        $this->assertTrue($prim);
        
        // Assert False with error message
        $this->assertFalse($a->isPrime(13873*14107), '195706411 is not a prime number!');
        
        // Test edge cases
        $this->assertTrue($a->isPrime(2), '2 is a prime number!');
        $this->assertFalse($a->isPrime(1), '1 is not a prime number!');
        $this->assertFalse($a->isPrime(0), '0 is not a prime number!');

    }

}

