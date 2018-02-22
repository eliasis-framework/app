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

use Eliasis\Complement\Type\Module;
use Eliasis\Framework\App;
use Eliasis\Framework\Controller;
use Josantonius\Asset\Asset;

/**
 * Home controller.
 */
class Complement extends Controller
{
    /**
     * Styles.
     */
    public function css()
    {
        $css = App::getOption('assets', 'css');

        Asset::add('style', $css['sampleApp']);
        Asset::add('style', $css['eliasisComplements']);
    }

    /**
     * Scripts.
     */
    public function js()
    {
        $js = App::getOption('assets', 'js');

        Asset::add('script', $js['eliasisComplements']);
    }

    /**
     * Render view.
     */
    public function render()
    {
        $this->css();
        $this->js();

        $layout = App::getOption('path', 'layout');

        $this->view->renderizate($layout, 'header');

        Module::render();

        $this->view->renderizate($layout, 'footer');
    }
}
