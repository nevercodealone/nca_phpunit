# TYPO3 Schulung für PHPUnit Tests

## PhpStorm Integration
https://www.jetbrains.com/help/phpstorm/using-codeception-framework.html

## PhpStorm Settings
Path to executable Codeception
/Users/.../typo3conf/ext/eh_phpunit/.Build/bin/codecept

Path to configuration
/Users/..../typo3conf/ext/eh_phpunit/codeception.yml

## Run commands
All tests in root folder
```bash
$ phpunit -c typo3/sysext/core/Build/UnitTests.xml typo3conf/ext/eh_phpunit/Tests/Unit
```
With code coverage
```bash
$ phpunit --coverage-html=./coverage.html -c typo3/sysext/core/Build/UnitTests.xml typo3conf/ext/eh_phpunit/Tests/Unit
```
Run a single test suite
```bash
$ phpunit --filter testAddWithTwoValidIntegers -c typo3/sysext/core/Build/UnitTests.xml typo3conf/ext/eh_phpunit/Tests/Unit/CalculatorTest.php
```
Run all TYPO3 core tests
```bash
$ phpunit -c typo3/sysext/core/Build/UnitTests.xml
```
## Mock object code coverage
```bash
phpunit --coverage-html=./coverage.html --filter subscriptionWithValidEmailReturnWelcome -c typo3/sysext/core/Build/UnitTests.xml typo3conf/ext/eh_phpunit/Tests/Unit
```
If you use the last command and see the genereted coverage you will see that the validateEmail method is not covered
### Inspriation
Thank you Helmut Hummel for your scaffold extension
[GitHub](https://github.com/helhum/ext_scaffold)

