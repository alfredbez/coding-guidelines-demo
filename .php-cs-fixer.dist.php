<?php

$finder = PhpCsFixer\Finder::create()->in(['src']);

$config = new PhpCsFixer\Config();
return $config->setRules([
        'phpdoc_indent' => true,
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
        'no_empty_phpdoc' => true,
        'no_blank_lines_after_class_opening' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
    ])
    ->setFinder($finder)
;
