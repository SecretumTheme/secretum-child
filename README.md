# WordPress Responsive Multipurpose Theme - Secretum Child Theme

**This is the primary child theme for [Secretum Theme](https://github.com/SecretumTheme/secretum/)** - A highly customizable fluid-responsive cross-device multi-purpose WordPress theme created for both beginner and advanced WordPress users.

The Secretum Child theme is a blank theme with no working files and no ability to automatically update.

Download the [secretum-child.zip](https://raw.githubusercontent.com/SecretumTheme/secretum-child/master/secretum-child.zip) file or the [Github Release](https://github.com/SecretumTheme/secretum-child/releases). Then [manually install the theme by uploading the zip archive](https://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation_by_Uploading_a_Zip_Archive) within plugin admin. If you fork this repo do not upstream or sync unless you plan on manually expecting the changes - as files are subject to change.


## Custom Child Theme Stylesheet

The key to making this function work is the dependency line ``` array( 'secretum' ), ``` this line forces the child enqueue to load after the parent themes stylesheet, allowing your custom styles to override the parent theme styles.

The example below can be found within the functions.php file. 

```
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
```