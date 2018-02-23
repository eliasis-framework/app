<?php
/**
 * Eliasis PHP Framework application
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/app
 * @since     1.0.0
 */
use Eliasis\Framework\App;

$controller = App::getOption('namespaces', 'controller');

return [
    'routes' => [
        '/' => $controller . 'Home@render',
        'complements/' => $controller . 'Complement@render'
    ],
];
