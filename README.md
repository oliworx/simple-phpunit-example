# simple-phpunit-example
a very basic example to start with php and phpunit

you will need 
 * php with xml support for the command line: `sudo apt-get install php-cli php-xml` or `sudo apt-get install php7.0-cli php7.0-xml`
 * phpunit, see https://phpunit.de/getting-started.html 
 
to run the tests with phpunit:
  
    phpunit test/*
  
to run the actual programm (to test if 17 is a prime number):
  
    php isprime 17

Using these awesome free services for continuous integration:

Travis CI [![Build Status](https://travis-ci.org/oliworx/simple-phpunit-example.svg?branch=master)](https://travis-ci.org/oliworx/simple-phpunit-example)

Codeship [ ![Codeship Status for oliworx/simple-phpunit-example](https://codeship.com/projects/2c42a010-dc15-0133-6fb4-1e79fc1c4a8a/status?branch=master)](https://codeship.com/projects/144009)

Semaphore CI [![Build Status](https://semaphoreci.com/api/v1/oliworx/simple-phpunit-example/branches/master/badge.svg)](https://semaphoreci.com/oliworx/simple-phpunit-example)
