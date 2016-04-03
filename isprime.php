<?php
include 'Primes.php';
if (!isset($argv[1])) exit ("please provide a number as parameter!\n");

echo $argv[1]." is ";

$pr = new Primes();

echo $pr->isPrime($argv[1]) ? 'prime':'not prime';
echo "\n";
