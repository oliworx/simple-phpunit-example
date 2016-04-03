<?php
include 'Primes.php';

class BasicTest extends PHPUnit_Framework_TestCase
{

    public function testCheckPrime()
    {
    	// Arrange
        $a = new Primes();
        // Act
        $prim = $a->isPrime(31);
        // Assert
        $this->assertTrue($prim);
        
        // Assert False with error message
        $this->assertFalse($a->isPrime(20), '20 is not a prime number!');

    }

}

