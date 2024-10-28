<?php

$config = \TYPO3\CodingStandards\CsFixerConfig::create();
$config->getFinder()
->in([
    __DIR__ . '/Classes',
     __DIR__ . '/Tests',
])
->name('*.php')
->ignoreDotFiles(true)
->ignoreVCS(true);

$rules = [
    'braces' => false,
    'single_space_around_construct' => true,
    'control_structure_braces' => true,
    'control_structure_continuation_position' => true,
    'declare_parentheses' => true,
    'no_multiple_statements_per_line' => true,
    'braces_position' => true,
    'statement_indentation' => true,
    'no_extra_blank_lines' => true,
];
return $config->setRules($rules);
