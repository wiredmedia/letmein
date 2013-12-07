<?php
/**
 * letmein
 *
 * A simple letmein plugin
 *
 * @wordpress-plugin
 * Plugin Name: letmein
 * Plugin URI:  http://wiredmedia.co.uk
 * Description: A simple letmein plugin
 * Version:     1.0.0
 * Author:      WiredMedia
 * Author URI:  http://wiredmedia.co.uk
 * Text Domain: letmein-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

namespace WiredMedia\letmeinPlugin;

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

/**
 * Plugin, used for retreiving global variables.
 *
 */
class Plugin {
    /**
     * Plugin version, used for cache-busting of style and script file references.
     *
     * @since   1.0.0
     *
     * @var     string
     */
    public $version = "1.0.0";

    /**
     * The main plugin file
     *
     * @since    1.0.0
     *
     * @var      string
     */
    public $main_file = "letmein/letmein.php";

    /**
     * Unique identifier for your plugin.
     *
     * Use this value (not the variable name) as the text domain when internationalizing strings of text. It should
     * match the Text Domain file header in the main plugin file.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    public $slug = "letmein";

    /**
     * Instance of this class.
     *
     * @since    1.0.0
     *
     * @var      object
     */
    protected static $instance = null;

    /**
     * Return an instance of this class.
     *
     * @since     1.0.0
     *
     * @return    object    A single instance of this class.
     */
    public static function get_instance() {

        // If the single instance hasn"t been set, set it now.
        if (null == self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

}

foreach (glob(plugin_dir_path(__FILE__) . 'lib/*.php') as $file) {
    require_once($file);
}
