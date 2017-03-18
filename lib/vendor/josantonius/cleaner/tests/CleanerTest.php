<?php 
/**
 * PHP class for cleaning resources.
 * 
 * @category   JST
 * @package    Cleaner
 * @subpackage CleanerTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2016 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-Cleaner
 * @since      File available since 1.0.0 - Update: 2017-01-30
 */

namespace Josantonius\Cleaner\Tests;

use Josantonius\Cleaner\Cleaner;

/**
 * Tests class for Cleaner library.
 *
 * @since 1.0.0
 */
class CleanerTest { 

    /**
     * Remove magic quotes.
     */
    public static function testRemoveMagicQuotes() {

        Cleaner::removeMagicQuotes();
    }

    /**
     * Remove globals.
     */
    public static function testUnregisterGlobals() {

        Cleaner::unregisterGlobals();
    }
}