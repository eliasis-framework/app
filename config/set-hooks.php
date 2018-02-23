<?php
/**
 * Eliasis PHP Framework application.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/app
 * @since     1.0.0
 */
use Eliasis\Framework\App;

$namespace = App::getOption('namespaces', 'controller');

return [
    'hooks' => [
        ['meta', [$namespace . 'Home', 'meta'], 8, 0],
        ['header',  [$namespace . 'Home', 'header'], 8, 0],
        ['after-body', [$namespace . 'Home', 'afterBody'], 8, 0],
        ['footer',  [$namespace . 'Home', 'footer'], 8, 0],
    ],
];
