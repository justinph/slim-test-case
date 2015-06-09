# Slim Test Case

This is a very basic test case for debuging an issue with the "slim-test-helpers":https://github.com/there4/slim-test-helpers

To set up, clone this repository to a location on your computer. Then run composer:

    $ composer install


To run tests:

    $ cd tests
    $ phpunit

There is only one test, `tests\Controllers\DemoTest.php`, which tests the results of `lib\Controllers\DemoController.php`. This contoller has two methods and corresponding routes in the bootstrap, one which 404s and one which 200s. 

The tests see both results as 200s, which is not expected.
