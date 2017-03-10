<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/App
 * @since      1.0.0
 */

use Eliasis\Hook\Hook;
use Eliasis\App\App;

?>
<!DOCTYPE html>

<html lang="es">

    <?php require(App::path('elements') . 'header.php'); ?>
    
    <body>
        <?php Hook::run('afterBody');?>
        <?php require(App::path('pages') . 'home.php'); ?>

    </body>
    <?php require(App::path('elements') . 'footer.php'); ?>

</html>