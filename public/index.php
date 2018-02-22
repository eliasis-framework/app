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
require dirname(__DIR__) . '/vendor/autoload.php';

use Eliasis\Framework\App;
use Josantonius\LoadTime\LoadTime;

LoadTime::start();

App::run(dirname(__DIR__));

/*
 * Show runtime.
 *
 * print_r('Executed in: ' . LoadTime::end() . ' seconds.');
 */
