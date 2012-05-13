<?php

namespace Acme\DemoBundle\Tests\Utility;

use Csuarez\SimpleMathBundle\Math\SimpleCalculator;

/**
 * Unit tests for SimpleCalculator.
 */
class SimpleCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubtract()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->subtract(4, 2);
        $this->assertEquals(2, $result);
    }

    public function testDivide()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->divide(6, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply()
    {
        $calculator = new SimpleCalculator();
        $result = $calculator->multiply(4, 2);
        $this->assertEquals(8, $result);
    }

    public function testErrorOnDivide() 
    {
        $calculator = new SimpleCalculator();
        $this->setExpectedException('Csuarez\SimpleMathBundle\Math\CalculatorException');
        $calculator->divide(4, 0);
    }
}

?>