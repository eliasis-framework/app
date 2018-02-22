<?php
/**
 * Eliasis PHP Framework application
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - Eliasis Framework Application
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Eliasis-Framework/App
 * @since     1.0.5
 */
use Eliasis\Complement\Type\Module;
use Eliasis\Framework\App;

$cssUrl = App::getOption('url', 'css');
$jsUrl = App::getOption('url', 'js');

return [
    'assets' => [
        'js' => [
            'sampleApp' => [
                'name' => 'sampleApp',
                'url' => $jsUrl . 'sample-app.js',
                'attr' => 'defer',
                'version' => '1.0.0',
                'footer' => true
            ],
            'eliasisComplements' => [
                'name' => 'eliasisComplements',
                'url' => Module::script(),
                'attr' => 'defer',
                'version' => '1.0.0',
                'footer' => true
            ],
        ],

        'css' => [
            'sampleApp' => [
                'name' => 'sampleApp',
                'url' => $cssUrl . 'sample-app.css',
                'version' => '1.0.0'
            ],
            'eliasisComplements' => [
                'name' => 'eliasisComplements',
                'url' => Module::style(),
                'version' => '1.0.0'
            ],
        ],
    ],
];
