<?php
/**
 * PHP library for handling errors and notices.
 * 
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2016-2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Notice
 * @since      1.0.0
 */

namespace Josantonius\Notice\Tests;

use Josantonius\Notice\Notice;

/**
 * Tests class for Notice library.
 *
 * @since 1.0.0
 */
class NoticeTest { 

    /**
     * Get array with notices in english.
     *
     * @since 1.0.0
     */
    public static function testLoad() {

        echo '<pre>'; Notice::load(); echo '</pre>'; 
    }

    /**
     * Get array with notices in spanish.
     *
     * @since 1.0.0
     */
    public static function testLoadES() {

        echo '<pre>'; Notice::load('es'); echo '</pre>'; 
    }

    /**
     * Get the english meaning of a notice.
     *
     * @since 1.0.0
     */
    public static function testGetEN() {

        echo Notice::get(200);
    }

    /**
     * Get the spanish meaning of a notice.
     *
     * @since 1.0.0
     */
    public static function testGetES() {

        echo Notice::get(200, 'es');
    }

    /**
     * Get english meaning from an undefined notice.
     *
     * @since 1.0.0
     */
    public static function testGetUndefinedEN() {

        echo Notice::get(800);
    }

    /**
     * Get spanish meaning from an undefined notice.
     *
     * @since 1.0.0
     */
    public static function testGetUndefinedES() {

        echo Notice::get(800, 'es');
    }

    /**
     * Get all notices saved in english.
     *
     * @since 1.0.0
     */
    public static function testGetAllEN() {

        echo '<pre>'; var_dump(Notice::getAll()); echo '</pre>';
    }

    /**
     * Get all notices saved in spanish.
     *
     * @since 1.0.0
     */
    public static function testGetAllES() {

        echo '<pre>'; var_dump(Notice::getAll('es')); echo '</pre>';
    }
}
