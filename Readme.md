# Slim Test Case

This is a very basic test case for debuging an issue with the [slim-test-helpers](https://github.com/there4/slim-test-helpers).

To set up, clone this repository to a location on your computer. Then run composer:

    $ composer install

If you do not have composer installed globally, you may need to install composer in this project first with: `curl -sS https://getcomposer.org/installer | php`.


To run tests:

    $ cd tests
    $ phpunit

Depending on your environment, you might need to run `../vendor/phpunit/phpunit/phpunit` from within the `tests` dir, rather than simply `phpunit`. 

There is only one test, `tests\Controllers\DemoTest.php`, which tests the results of `lib\Controllers\DemoController.php`. This contoller has two methods and corresponding routes in the bootstrap, one which 404s and one which 200s. 

The tests see both results as 200s, which is not expected.
