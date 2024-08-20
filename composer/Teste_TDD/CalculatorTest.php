<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new CalculatorTest();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtraction()
    {
        $calculator = new CalculatorTest();
        $this->assertEquals(0, $calculator->subtract(2, 2));
    }

    public function testMultiplication()
    {
        $calculator = new CalculatorTest();
        $this->assertEquals(4, $calculator->multiply(2, 2));
    }

    public function testDivision()
    {
        $calculator = new CalculatorTest();
        $this->assertEquals(2, $calculator->divide(4, 2));
    }
}
