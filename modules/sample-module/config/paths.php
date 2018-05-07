<?php
/**
 * Eliasis PHP Framework application.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/app
 * @since     1.0.5
 */
use Eliasis\Framework\App;

$DS = APP::DS;

$rootPath = App::MODULES() . 'sample-module' . $DS;

return [
    'path' => [
        'layout' => $rootPath . 'src' . $DS . 'template' . $DS . 'layout' . $DS,
        'page' => $rootPath . 'src' . $DS . 'template' . $DS . 'page' . $DS,
    ],
];
