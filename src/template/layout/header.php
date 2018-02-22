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
use Josantonius\Asset\Asset;
use Josantonius\Hook\Hook;

$data = View::getOption();
?>
<!DOCTYPE html>

<html lang="es">

    <head>
        <!-- Site meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="utf-8">
        <?= Hook::doAction('meta') ?> 
        <!-- Title -->
        <title><?= $data['title'] ?></title>

        <!-- CSS -->
        <?= Asset::outputStyles() ?>
    </head>
