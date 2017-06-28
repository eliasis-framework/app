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

$DS = App::DS;

$ROOT = Module::ForkMeGitHub()->get('path', 'root');

return [

    'path' => [

        'components' => $ROOT.'src'.$DS.'template'.$DS.'components'.$DS,
    ],
];
