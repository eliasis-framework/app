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

use Eliasis\App\App,
	Josantonius\Hook\Hook;

?>
<!DOCTYPE html>

<html lang="es">

    <?php require(App::path('elements') . 'header.php'); ?>
    
    <body>
        <?php Hook::run('after-body');?>
        <?php require(App::path('pages') . 'home.php'); ?>

    </body>
    <?php require(App::path('elements') . 'footer.php'); ?>

</html>