<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/App
 * @since      1.0.0
 */

$DS = DIRECTORY_SEPARATOR;

$loader = require dirname(__DIR__).$DS.'lib'.$DS.'vendor'.$DS.'autoload.php';

use Eliasis\App\App,
    Josantonius\LoadTime\LoadTime;

LoadTime::start();

new App(dirname(__DIR__));

/**
 * Show runtime.
 * 
 * print_r('Executed in: ' . LoadTime::end() . ' seconds.');
 */
