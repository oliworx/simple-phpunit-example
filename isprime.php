<?php
include 'Primes.php';
if (!isset($argv[1])) exit ("please provide a number as parameter!\n");

$i = $argv[1];
$pr = new Primes();
$isprime = $pr->isPrime($i);
echo $pr->steps . " steps\n";
echo $i . ' is ' . ( $isprime ? '':'not ') . "prime\n";
