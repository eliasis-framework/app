<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/Eliasis
 * @since      1.0.0
 */

namespace App\Modules\ForkMeGitHub;

use Eliasis\App\App,
    Eliasis\Hook\Hook,
    Eliasis\Module\Module;
    
/**
 * Module initializer.
 *
 * @since 1.0.0
 */
class ForkMeGitHub extends Module {

    /**
     * Add routes.
     *
     * @since 1.0.0
     */
    public static function setRoutes() { }

    /**
     * Add hooks.
     *
     * @since 1.0.0
     */
    public static function setHooks() {

        Hook::addHook([
            'css'       => self::$class . '@css',
            'top'       => self::$class . '@top',
        ]);
    }
}
