<?php
declare(strict_types = 1);

namespace Eh\EhPhpunit;

use Eh\EhPhpunit\AcceptanceTester as Tester;

class firstCest
{
    // tests
    public function testify(Tester $I)
    {
        $I->loginAsAdmin();
    }
}
