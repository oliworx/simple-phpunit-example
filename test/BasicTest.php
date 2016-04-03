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
    
    public function testEndToEnd()
    {
		$last_line = system('php isprime.php 18', $retval);
		$this->assertStringEndsWith('is not prime', $last_line);

		$this->assertStringEndsWith('is prime',
				system('php isprime.php 31', $retval));

		$this->assertStringEndsWith('is prime',
				system('php isprime.php 179426549', $retval));

		$this->assertStringStartsWith('please provide a number as parameter',
				system('php isprime.php', $retval),
				'should print error message, if no number is given');
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

    /**
     * @dataProvider nonPrimeProvider
     */
    public function testMultiNonPrimes($p)
    {
		$a = new Primes();
		$this->assertFalse($a->isPrime($p), $p.' is not a prime number!');
	}
    
    public function nonPrimeProvider($p)
    {
		return array(
          array(6),
          array(1223*1223),
          array(1223*8831),
          array(1223*105943),
          array(1223*1301081),
          array(1223*15487469),
          array(179426549*179426549),
        );
	}

}

