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

namespace App\Modules\ForkMeGitHub\Controller;

use Josantonius\Asset\Asset,
    Eliasis\Module\Module,
    Eliasis\Controller\Controller;
    
/**
 * Module main controller.
 *
 * @since 1.0.0
 */
class ForkMeGitHub extends Controller {

    /**
     * Actions for css hook.
     *
     * @since 1.0.0
     */
    public function css() {

        Asset::css(Module::ForkMeGitHub('url', 'css') . 'style.css');
    }

    /**
     * Actions for top hook.
     *
     * @since 1.0.0
     */
    public function render() {

        $path = Module::ForkMeGitHub('path', 'elements');

        $this->view->renderizate($path . 'strip');
    }
}
