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

$DS = App::DS;

$rootPath = App::ROOT();

return [
    'path' => [
        'components' => $rootPath . 'components' . $DS,
        'modules' => $rootPath . 'modules' . $DS,
        'plugins' => $rootPath . 'plugins' . $DS,
        'templates' => $rootPath . 'templates' . $DS,
        'public' => $rootPath . 'public' . $DS,
        'layout' => $rootPath . 'src' . $DS . 'template' . $DS . 'layout' . $DS,
        'page' => $rootPath . 'src' . $DS . 'template' . $DS . 'page' . $DS,
    ],
];
