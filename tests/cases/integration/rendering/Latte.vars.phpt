<?php

/**
 * Test: Latte - vars
 */

use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

test(function () {
    $adapter = LatteTemplateAdapterFactory::create();

    Assert::matchFile(
        __DIR__ . '/expected/vars.html',
        $adapter->renderToString(__DIR__ . '/templates/vars.latte', [])
    );
});