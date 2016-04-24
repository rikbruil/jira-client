<?php

$header = <<<'EOF'
This file is part of the Jira Client library.

(c) Rik Bruil <rikbruil@users.noreply.github.com>

This source file is subject to the MIT license that is bundled
with this source code in the LICENSE file.
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->files()
    ->name('*.php')
    ->in([__DIR__ . '/src', __DIR__ . '/features']);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        'header_comment',
        'align_equals',
        'concat_with_spaces',
        'ordered_use',
        'phpdoc_order',
        'strict',
        'strict_param',
    ])
    ->finder($finder);