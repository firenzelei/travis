<?php

include 'vendor/autoload.php';

/**
*
*/
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testAddNumbers()
    {
        $this->assertEquals(4, CalculatorLei::add(2, 2));
    }
}