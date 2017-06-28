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

use Josantonius\Hook\Hook;
?>
<!DOCTYPE html>

<html lang="es">

    <head>
        <!-- Site meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <?php Hook::doAction('meta') ?> 
        <!-- Title -->
        <title>Eliasis PHP Framework</title>

        <!-- CSS -->
        <?php Hook::doAction('css') ?>
    </head>
