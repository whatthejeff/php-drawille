php-drawille
============

Terminal drawing with [braille](http://en.wikipedia.org/wiki/Braille).

## Requirements

php-drawille requires PHP 5.4.0 or later.

## Installation

The recommended way to install php-drawille is [through
composer](http://getcomposer.org). Just create a `composer.json` file and
run the `php composer.phar install` command to install it:

~~~json
{
    "require": {
        "whatthejeff/drawille": "~1.0"
    }
}
~~~

## Tests

To run the test suite, you need [composer](http://getcomposer.org).

    $ php composer.phar install
    $ vendor/bin/phpunit

## Acknowledgements

php-drawille is a port of [drawille](https://github.com/asciimoo/drawille).

## License

php-drawille is licensed under the [MIT license](LICENSE).