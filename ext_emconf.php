<?php
$EM_CONF[$_EXTKEY] = array(
  'title' => 'Extension for PHPUnit TYPO3 7',
  'description' => 'This i a course of entwicklungshilfe nrw',
  'category' => 'Example Extensions',
  'author' => 'Roland Golla',
  'author_email' => 'rolandgolla@gmail.com',
  'author_company' => 'Entwicklungshilfe NRW',
  'shy' => '',
  'priority' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => '0',
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'version' => '0.0.2',
  'constraints' =>
  array(
    'depends' =>
    array(
      'typo3' => '7.5.0-7.99.99',
    ),
    'conflicts' =>
    array(
    ),
    'suggests' =>
    array(
    ),
  ),
  'autoload' =>
  array(
    'psr-4' =>
    array(
      'Eh\\EhPhpunit\\' => 'Classes',
    ),
  ),
  'autoload-dev' =>
  array(
    'psr-4' =>
    array(
      'Eh\\EhPhpunit\\Tests\\' => 'Tests',
    ),
  ),
);
