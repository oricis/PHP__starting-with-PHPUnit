<?php

require '../src/Prueba.php';
require '../vendor/autoload.php';

use \PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase
{
    public function testFoo(): void
    {
        $result = Prueba::foo();
        $expected = 'Foo';

        $this->assertEquals($expected, $result);
    }
}

// Run test:
//    phpunit PruebaTest.php
//
// or
//    ../vendor/bin/phpunit PruebaTest.php
//
// Aliases command:
//     alias phpunit='php ../vendor/bin/phpunit'
