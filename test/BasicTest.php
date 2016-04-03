<?php
include 'Primes.php';

class BasicTest extends PHPUnit_Framework_TestCase
{

    public function testSimpleCheckPrime()
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
    
    /**
     * @dataProvider primeNumberProvider
     */
    public function testMultiPrimes($p)
    {
		$a = new Primes();
		$this->assertTrue($a->isPrime($p), $p.' is a prime number!');
	}
    
    public function primeNumberProvider($p)
    {
		return array(
          array(1223),
          array(8831),
          array(105943),
          array(1301081),
          array(15487469),
          array(179426549),
        );
	}

}

