<?php
namespace Eh\EhPhpunit;

class calculatorCest
{
    private $fixture;

    public function _before(UnitTester $I)
    {
        $this->fixture = new Calculator();
    }

    public function testAddWithTwoValidIntegers(UnitTester $I) {
        $I->assertEquals(4, $this->fixture->add(2,2));
        $I->assertEquals(2, $this->fixture->add(1,1));
    }

    public function testAddWithThreeValidIntegers(UnitTester $I) {
        $I->assertEquals(5, $this->fixture->add(2,2,1), "should use 2, 2 and 1 as parameter for add function");
        $I->assertEquals(3, $this->fixture->add(1,1,1), "should use 1, 1 and 1 as parameter for add function");
    }

    public function testMultiplyWithTwoValidIntegers(UnitTester $I) {
        $I->assertEquals(0, $this->fixture->multiply(0,5));
        $I->assertEquals(5,$this->fixture->multiply(5,1));
        $I->assertEquals(20, $this->fixture->multiply(5,4));
    }

    public function subWithThreeValidIntegers(UnitTester $I){
        $I->assertTrue( 6 === $this->fixture->sub(9,2,1));
        $I->assertEquals( 4, $this->fixture->sub(10,4,2));
    }
}
