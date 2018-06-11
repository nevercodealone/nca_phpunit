<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */

use TYPO3\CMS\Core\Tests\UnitTestCase;

class CalculatorTest extends UnitTestCase
{
    protected $fixture;

    public function setUp()
    {
        parent::setUp();
        $this->fixture = new \Eh\EhPhpunit\Calculator;
    }

    public function testAddWithTwoValidIntegers() {
        $this->assertEquals(4, $this->fixture->add(2,2));
        $this->assertEquals(2, $this->fixture->add(1,1));
    }

    public function testAddWithThreeValidIntegers() {
        $this->assertEquals(5, $this->fixture->add(2,2,1), "should use 2, 2 and 1 as parameter for add function");
        $this->assertEquals(3, $this->fixture->add(1,1,1), "should use 1, 1 and 1 as parameter for add function");
    }

    public function testMultiplyWithTwoValidIntegers() {
        $this->assertEquals(0, $this->fixture->multiply(0,5));
        $this->assertEquals(5,$this->fixture->multiply(5,1));
        $this->assertEquals(20, $this->fixture->multiply(5,4));
    }


    /**
     * @test
     */
    public function subWithThreeValidIntegers(){
        $this->assertTrue( 6 === $this->fixture->sub(9,2,1));
        $this->assertEquals( 4, $this->fixture->sub(10,4,2));
    }

}