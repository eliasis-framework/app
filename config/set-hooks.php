<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/App
 * @since      1.0.0
 */

use Eliasis\App\App;

$namespace = App::get('namespaces', 'controller');

$class = 'Home\\Home';

return [

    'hooks' => [

		['css',        [$namespace . $class, 'css']   , 8, 0],
		['js',         [$namespace . $class, 'render'], 8, 0],
    ],
];
