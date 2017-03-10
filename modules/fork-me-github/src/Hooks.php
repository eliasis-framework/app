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

namespace App\Modules\ForkMeGitHub;

use Eliasis\Hook\Hook,
    Eliasis\Module\Module;

/**
 * Hooks handler.
 *
 * @since 1.0.0
 */
class Hooks {

    /**
     * Add hooks to the application.
     *
     * @param array $hooks
     *
     * @since 1.0.0
     */
    public static function add() {

        $controller = Module::ForkMeGitHub('getNamespace', 'controller');

        $hooks = [

            'css'       => $controller . 'ForkMeGitHub' . '@css',
            'afterBody' => $controller . 'ForkMeGitHub' . '@render',

        ];

        Hook::addHook($hooks);
    }
}
