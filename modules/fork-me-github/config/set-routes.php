<?php
/**
 * Eliasis PHP Framework application module
 *
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/fork-me-github
 * @since      1.0.0
 */

use Eliasis\Module\Module;

$controller = Module::ForkMeGitHub('namespace', 'controller');

return [

    'routes' => [

        'example' => $controller . 'ForkMeGitHub' . '@example',
    ],
];
