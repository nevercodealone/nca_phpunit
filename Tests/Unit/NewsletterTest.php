<?php
/**
 * This is a file with php code.
 *
 * @package Rogoit
 * @author  Roland Golla <rolandgolla@gmail.com>
 */

use TYPO3\CMS\Core\Tests\UnitTestCase;

class NewsletterTest extends UnitTestCase
{
    protected $fixture;

    public function setUp()
    {
        parent::setUp();
        $this->fixture = new \Eh\EhPhpunit\Newsletter();
    }

    /**
     * @test
     */
    public function subscriptionWithValidEmailReturnWelcome() {
        $fooCounter = $this->getMock('\Eh\EhPhpunit\Newsletter', array('validateEmail'));
        $fooCounter->expects($this->any())
            ->method('validateEmail')
            ->will(self::returnValue(true));

        $this->assertEquals('Welcome', $this->fixture->subscription('rolandgolla@gmail.com'));
    }

    public function testSubWithInvalidEmail() {
        $this->assertFalse($this->fixture->subscription('notAnEmail'));
    }

    /**
     * @dataProvider validEmails
     */
    public function testSubWithValidEmails($value) {
        $this->assertEquals('Welcome', $this->fixture->subscription($value));
    }

    /**
     * @dataProvider invalidEmails
     */
    public function testSubWithInvalidEmails($value) {
        $this->assertFalse($this->fixture->subscription($value));
    }

    public static function validEmails() {
        return [
            ['test@ify.com'],
            ['info@entwicklungshilfe.nrw']
        ];
    }

    public static function invalidEmails() {
        return [
            ['testify.com'],
            ['spam@gmail.com']
        ];
    }


    public function testProtectedValidateEmail()
    {
        $method = self::getMethod('validateEmail');
        $this->assertTrue($method->invokeArgs($this->fixture, ['test@valid.com']));
    }

    protected function getMethod($name) {
        $class = new \ReflectionClass(\Eh\EhPhpunit\Newsletter::class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }

}