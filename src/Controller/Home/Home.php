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

namespace App\Controller\Home;

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
     * Actions for css hook.
     *
     * @since 1.0.0
     */
	public function css() {

        Asset::css(App::PUBLIC_URL() . 'css/style.css');
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

        $page = App::get('path', 'page');

        $layout = App::get('path', 'layout');

        $this->view->renderizate($layout, 'header');

        $this->view->renderizate($page, 'home');

        $this->view->renderizate($layout, 'footer');    
	}
}
