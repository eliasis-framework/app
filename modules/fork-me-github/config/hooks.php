<?php
/**
 * Eliasis PHP Framework application module
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/fork-me-github
 * @since      1.0.0
 */

use Eliasis\Module\Module;

$controller = Module::getNamespace('controller');

return [

    'hooks' => [
        'css'        => $controller . 'ForkMeGitHub' . '@css',
        'after-body' => $controller . 'ForkMeGitHub' . '@render',
    ],
];
