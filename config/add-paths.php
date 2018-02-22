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

$rootPath = App::ROOT();

return [
    'path' => [
        'components' => $rootPath . 'components/',
        'modules' => $rootPath . 'modules/',
        'plugins' => $rootPath . 'plugins/',
        'templates' => $rootPath . 'templates/',
        'public' => $rootPath . 'public/',
        'layout' => $rootPath . 'src/template/layout/',
        'page' => $rootPath . 'src/template/page/',
    ],
];
