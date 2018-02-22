<?php
/**
 * Eliasis PHP Framework application
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Eliasis-Framework/App
 * @since     1.0.0
 */
use Eliasis\Framework\App;

$namespace = App::getOption('namespaces', 'controller');

$class = 'Home';

return [
    'hooks' => [
        ['css', [$namespace . $class, 'css'], 8, 0],
        ['js',  [$namespace . $class, 'js'], 8, 0],
    ],
];
