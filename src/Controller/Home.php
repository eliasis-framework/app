<?php
/**
 * Eliasis PHP Framework application
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/app
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
     * Actions for meta hook.
     */
    public function meta()
    {
        return "<!-- meta hook -->\n";
    }

    /**
     * Styles.
     */
    public function css()
    {
        $css = App::getOption('assets', 'css');

        Asset::add('style', $css['sampleApp']);
    }

    /**
     * Scripts.
     */
    public function js()
    {
        $js = App::getOption('assets', 'js');

        Asset::add('script', $js['sampleApp']);
    }

    /**
     * Actions for afterbody hook.
     */
    public function afterBody()
    {
        return "<!-- afterBody hook -->\n";
    }

    /**
     * Actions for footer hook.
     */
    public function footer()
    {
        return "<!-- footer hook -->\n";
    }

    /**
     * Render view.
     */
    public function render()
    {
        $this->css();
        $this->js();

        $pageData = [
            'title' => 'ELIASIS',
            'subtitle' => 'PHP Framework'
        ];

        $headerData = [
            'title' => 'Eliasis PHP Framework'
        ];

        $page = App::getOption('path', 'page');
        $layout = App::getOption('path', 'layout');

        $this->view->renderizate($layout, 'header', $headerData);
        $this->view->renderizate($page, 'home', $pageData);
        $this->view->renderizate($layout, 'footer');
    }
}
