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
namespace App\Controller;

use Eliasis\Framework\App;
use Eliasis\Framework\Controller;
use Josantonius\Asset\Asset;
use Josantonius\Hook\Hook;

/**
 * Home controller.
 */
class Home extends Controller
{
    /**
     * Actions for css hook.
     */
    public function css()
    {
        $css = App::getOption('assets', 'css');

        Asset::add('style', $css['sampleApp']);

        echo Asset::outputStyles();
    }

    /**
     * Actions for js hook.
     */
    public function js()
    {
        $js = App::getOption('assets', 'js');

        Asset::add('script', $js['sampleApp']);

        echo Asset::outputScripts('footer');
    }

    /**
     * Actions for afterbody hook.
     */
    public function afterBody()
    {
    }

    /**
     * Actions for footer hook.
     */
    public function footer()
    {
    }

    /**
     * Render view.
     */
    public function render()
    {
        $page = App::getOption('path', 'page');
        $layout = App::getOption('path', 'layout');

        $this->view->renderizate($layout, 'header');
        $this->view->renderizate($page, 'home');
        $this->view->renderizate($layout, 'footer');
    }
}
