<?php

declare(strict_types=1);

namespace Pest;

function version(): string
{
    return '2.18.1';
}

function testDirectory(string $file = ''): string
{
    return TestSuite::getInstance()->testPath.DIRECTORY_SEPARATOR.$file;
}
