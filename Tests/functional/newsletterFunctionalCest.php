<?php
namespace Eh\EhPhpunit;

class newsletterFunctionalCest
{
    private $fixture;

    public function _before()
    {
        $this->fixture = new Newsletter();
    }

    // tests
    public function subscriptionWithInvalidEmailGivesFalse(FunctionalTester $I)
    {
        $I->assertFalse($this->fixture->subscription('testhibfcdhjk'));
    }
}
