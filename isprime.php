<?php
include 'Primes.php';
if (!isset($argv[1])) exit ("please provide a number as parameter!\n");

$i = $argv[1];
$pr = new Primes();

echo $i . ' is ' . ($pr->isPrime($i) ? '':'not ') . "prime\n";
