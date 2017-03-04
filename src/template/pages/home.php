<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/Eliasis
 * @since      1.0.0
 */

use Eliasis\Hook\Hook;
?>

        <!--
         * Animated butterfly logo 
         * @author  Varga László
         * @link    http://codepen.io/_lacus/pen/EVBeYM
        -->
        <div class='loading_animation'>
            <div class='butterfly'>
                <div class="content">
                    <h1>ELIASIS</h1>
                    <h3>PHP Framework</h3>
                </div>
                <div class='wingL'></div>
                <div class='wingR'></div>
            </div>
        </div>
        <?php Hook::run('top') ?> 