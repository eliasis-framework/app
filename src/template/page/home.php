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
use Eliasis\Framework\View;
use Josantonius\Hook\Hook;

$data = View::getOption();
?>

    <body>

        <?= Hook::doAction('after-body'); ?>

        <!--
         * Animated butterfly logo 
         * @author  Varga László
         * @link    http://codepen.io/_lacus/pen/EVBeYM
        -->
        <a href="complements" "email me">
            <div class='loading_animation'>
                <div class='butterfly'>
                    <div class="content">
                        <h1><?= $data['title'] ?></h1>
                        <h3><?= $data['subtitle'] ?></h3>
                    </div>
                    <div class='wingL'></div>
                    <div class='wingR'></div>
                </div>
            </div>
        </a>
