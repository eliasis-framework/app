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

use Eliasis\App\App;

$DS   = App::DS;
$ROOT = dirname(__DIR__) . $DS;

return [

    'path' => [

        'modules'  => $ROOT .'modules'.$DS,
        'public'   => $ROOT .'public' .$DS,
        'layout'   => $ROOT .'src'    .$DS.'template' . $DS . 'layout'   . $DS,
        'page'     => $ROOT .'src'    .$DS.'template' . $DS . 'page'     . $DS,
    ],
];
