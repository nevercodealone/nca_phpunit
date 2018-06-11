<?php
namespace Eh\EhPhpunit;
use Codeception\Stub;
use Eh\EhPhpunit\UnitTester;

class NewsletterCest
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
}
