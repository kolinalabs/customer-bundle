<?php

/*
 * fix encoding issue while running text on different host with different locale configuration
 */
setlocale(LC_ALL, 'en_US.UTF-8');

if (file_exists($file = __DIR__.'/autoload.php')) {
    require_once $file;
} elseif (file_exists($file = __DIR__.'/autoload.php.dist')) {
    require_once $file;
}

/*
 * try to get Symfony's PHPUnit Bridge
 */
$files = array_filter([
    __DIR__.'/../vendor/symfony/symfony/src/Symfony/Bridge/PhpUnit/bootstrap.php',
    __DIR__.'/../vendor/symfony/phpunit-bridge/bootstrap.php',
    __DIR__.'/../../../../vendor/symfony/symfony/src/Symfony/Bridge/PhpUnit/bootstrap.php',
    __DIR__.'/../../../../vendor/symfony/phpunit-bridge/bootstrap.php',
], 'file_exists');

if ($files) {
    require_once current($files);
}
