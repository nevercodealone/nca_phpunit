<?php
namespace Eh\EhPhpunit;
use Codeception\Stub;
use Eh\EhPhpunit\UnitTester;

class newsletterCest
{
    private $fixture;

    public function _before(UnitTester $I)
    {
        $this->fixture = new Newsletter();
    }

    // tests
    public function subscriptionWithValidEmailReturnWelcome(UnitTester $I)
    {
        $this->fixture = Stub::make(
            $this->fixture,
            [
                'validateEmail' => true
            ]
        );

        $I->assertSame('Welcome', $this->fixture->subscription('testify'));
    }

    // tests
    public function subscriptionWithInvalidEmailReturnWelcome(UnitTester $I)
    {
        $this->fixture = Stub::make(
            $this->fixture,
            [
                'validateEmail' => false
            ]
        );

        $I->assertFalse($this->fixture->subscription('testify'));
    }


}
