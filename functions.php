<?php
/**
 * Secretum Child Theme
 *
 * @package    Secretum_Child
 * @subpackage Functions
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  Secretum
 * @license    https://github.com/SecretumTheme/secretum-child/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum-child/blob/master/functions.php
 * @since      1.0.0
 */

/**
 * Enqueue Custom Child Theme Stylesheet
 *
 * 1) Create the directory: /css/
 * 2) Upload theme-child.min.css to the /css/ directory
 * 3) Uncomment the add_action line to hook the enqueue function
 *
 * The key to making this function work is the dependency line
 * array( 'secretum' ), this line forces the child enqueue to
 * load after the parent themes stylesheet, allowing your
 * custom styles to override the parent theme styles.
 *
 * @since 1.0.0
 */
function secretum_child_enqueue() {
    wp_enqueue_style(
    	'secretum-child',
        SECRETUM_STYLE_URL . '/css/theme-child.min.css',
        array( 'secretum' ),
        wp_get_theme()->get( 'Version' )
    );
}

// Hook Secretum Child Enqueue.
// add_action( 'wp_enqueue_scripts', 'secretum_child_enqueue' );
