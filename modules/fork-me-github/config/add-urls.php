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

use Eliasis\App\App,
    Eliasis\Module\Module;

$url = App::MODULES_URL() . Module::ForkMeGitHub()->get('folder');

return [

    'url' => [

        'css' => $url . 'public/css/',
        'js'  => $url . 'public/js/'
    ],
];
