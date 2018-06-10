<?php
namespace Eh\EhPhpunit;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public function loginAsAdmin()
    {
        $I = $this;
        $I->amOnPage('/typo3');
        $I->waitForElement('#t3-username');
        $I->fillField('#t3-username', 'ressourcenmangeltypo3');
        $I->fillField('#t3-password', 'ressourcenmangeltypo3');
        $I->click('#t3-login-submit');

        $I->switchToIFrame('list_frame');
        $I->waitForText('Web Content Management System');
        $I->switchToIFrame();

        $I->see('Backend users');
        $I->click('Backend users');

        // switch to content iframe
        $I->switchToIFrame('list_frame');
        $I->waitForElementNotVisible('div#nprogess');
    }
}
