<?php 
/**
 * PHP class for cleaning resources.
 * 
 * @author     FraGoTe - fgonzalestello91@gmail.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Cleaner
 * @since      1.0.0
 */

namespace Josantonius\Cleaner;

# use Josantonius\Cleaner\Exception\CleanerException;

/**
 * Resource cleaner.
 *
 * @since 1.0.0
 */
class Cleaner {   
   
    /**
     * Search register globals and remove them.
     *
     * @since 1.0.0
     */
    public static function unregisterGlobals() {

        if (ini_get('register_globals')) {

            $array = [
                '_SESSION', 
                '_POST', 
                '_GET', 
                '_COOKIE', 
                '_REQUEST', 
                '_SERVER', 
                '_ENV', 
                '_FILES'
            ];

            foreach ($array as $value) {

                foreach ($GLOBALS[$value] as $key => $var) {

                    if ($var === $GLOBALS[$key]) {

                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }  

    /**
     * Check Magic Quotes and remove them.
     *
     * @since 1.0.0
     *
     * @param array|string $value
     *
     * @return array|string
     */
    protected static function stripSlashesDeep($value) {

        $value = is_array($value) ? array_map(self::stripSlashesDeep, $value) : stripslashes($value);

        return $value;
    }

    /**
     * Check Magic Quotes and remove them.
     *
     * @since 1.0.0
     */
    public static function removeMagicQuotes() {

        if (get_magic_quotes_gpc()) {

            if (isset($_GET)) {

                $_GET = self::stripSlashesDeep($_GET);
            }
            
            if (isset($_POST)) {

                $_POST = self::stripSlashesDeep($_POST);
            }
            
            if (isset($_COOKIE)) {

                $_COOKIE = self::stripSlashesDeep($_COOKIE);
            }
        }
    }
}
