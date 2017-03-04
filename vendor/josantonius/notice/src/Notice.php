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

namespace Josantonius\Notice;

# use Josantonius\Notice\Exception\NoticeException;

/**
 * Notice handler.
 *
 * @since 1.0.0
 */
class Notice {

    /**
     * Array with list of notices.
     *
     * @since 1.0.0
     *
     * @var array
     */
    public static $notices;

    /**
     * Default language to display notices.
     *
     * @since 1.0.0
     *
     * @var string
     */
    public static $lang;

    /**
     * Load Jsond file with notices.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → notices
     */
    protected static function load($lang = 'en') {

        if ($lang !== static::$lang) {

            static::$notices = null;

            static::$lang = $lang;
        }

        if (is_null(static::$notices)) {

            $filepath = __DIR__ . "/resources/notices.jsond";

            $jsonFile = file_get_contents($filepath);

            $notices  = json_decode($jsonFile, true);

            static::$notices = $notices['data'][static::$lang];

            unset($notices);
        }

        return static::$notices;
    }
                                                                                
    /**
     * Get message from the notice code.
     *
     * If the definition does not exist and the class HTTPStatusCode exists,
     * the definition of the HTTPStatusCode class will be used.
	 *
	 * @link https://github.com/Josantonius/PHP-HTTPStatusCode
	 *
     * @since 1.0.0
     *
     * @param string $code → notice code
     *
     * @return string → notice
     */
    public static function get($code, $lang = 'en') {

		static::load($lang);

		if (class_exists('Josantonius\\HTTPStatusCode') && $code > 99 && $code < 512) {

			if (!isset(static::$notices[$code]) || empty(static::$notices[$code])) {

				return HTTPStatusCode::get($code, static::$lang);
			}
		}

		return (isset(static::$notices[$code])) ? static::$notices[$code] : "Undefined";
	}

    /**
     * Get a notices array.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → all notices saved
     */
    public static function getAll($lang = 'en') {

        static::load($lang);

        return static::$notices;
    }
}
