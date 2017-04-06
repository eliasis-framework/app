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

namespace App\Controller;

use Eliasis\App\App,
	Josantonius\Hook\Hook,
	Eliasis\Controller\Controller,
    Josantonius\Asset\Asset;

/**
 * Home controller.
 *
 * @since 1.0.0
 */
class Home extends Controller {

    /**
     * Construct.
     *
     * @since 1.0.0
     */
	protected function __construct() {

        $this->setHooks();
	}

    /**
     * Add hooks.
     *
     * @since 1.0.0
     */
	public function setHooks() {

		Hook::addHook([
			'css'       => App::getNamespace('controller') . 'Home@css',
			'js'        => App::getNamespace('controller') . 'Home@js',
		]);
	}

    /**
     * Actions for css hook.
     *
     * @since 1.0.0
     */
	public function css() {

        Asset::css(App::PUBLIC_URL() . 'css' . App::DS . 'style.css');
	}
	
    /**
     * Actions for js hook.
     *
     * @since 1.0.0
     */
	public function js() { }
	
    /**
     * Actions for afterbody hook.
     *
     * @since 1.0.0
     */
	public function afterBody() { }
	
    /**
     * Actions for footer hook.
     *
     * @since 1.0.0
     */
	public function footer() { }
	
    /**
     * Render view.
     *
     * @since 1.0.0
     */
	public function render() {

        $this->view->renderizate(App::path('layout') . 'default');
	}
}
