<?php
//* Start the engine ("TherapyNearYou.com" /wordpress2)
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'engage', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'engage' ) );

//* Child theme (do not remove) for "TherapyNearYou-WP"
define( 'CHILD_THEME_NAME', __( 'Engage Theme', 'engage' ) );
define( 'CHILD_THEME_URL', 'http://elioverbey.net' );
define( 'CHILD_THEME_VERSION', '1.0.4' );


//* Add HTML5 markup structure
//add_theme_support( 'html5' );

//* Add HTML5 markup structure (Toby added)
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );


//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'engage_enqueue_scripts_styles' );
function engage_enqueue_scripts_styles() {

	wp_enqueue_script( 'engage-responsive-menu',  '//localhost/wny/lib/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:400,500', array(), CHILD_THEME_VERSION );

}


//* Add support for custom background
add_theme_support( 'custom-background', array(
	'default-color'         => 'ffffff',
	'default-image'         => get_stylesheet_directory_uri() . '/images/header-banner.png',
	'wp-head-callback'      => 'engage_background_callback',
) );

//* Add custom background callback 
function engage_background_callback() { 

	$background = get_background_image();  
	$color = get_background_color();

	if ( ! $background && ! $color )  
		return; 

	echo trim( sprintf( 
		"<style type='text/css'>.custom-background .site-header-banner { background: %s %s %s %s %s; } </style>",
		$background ? 'url('. $background .')' : '',
		$color ? '#'. $color : 'transparent', 
		get_theme_mod( 'background_repeat', 'repeat' ), 
		get_theme_mod( 'background_position_x', 'left' ), 
		get_theme_mod( 'background_attachment', 'scroll' ) 
	) );
} 

/** Custom image sizes */
add_image_size( 'Posts', 50, 50, TRUE );

/** Remove footer widgets */
remove_theme_support( 'genesis-footer-widgets', 3 );

/** Move primary nav menu */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_after_header', 'genesis_do_nav', 15 );

//* Add custom body class to the head
add_filter( 'body_class', 'engage_custom_body_class' );
function engage_custom_body_class( $classes ) {

	$classes[] = 'engage';
	return $classes;

}

//* Unregister secondary navigation menu
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );


// Unregister other site layouts
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

///* Force sidebar-content-sidebar layout setting
//Toby-Fv1 add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content_sidebar' );

//* Hook site header banner after header
add_action( 'genesis_after_header', 'engage_site_header_banner' );
function engage_site_header_banner() {

	if ( ! get_background_image() )
		return;

	echo '<div class="site-header-banner"></div>';

}



// Callum Added

add_action( 'get_header', 'remove_titles_from_pages' );
function remove_titles_from_pages() {
    if ( is_page(array(950,953,956) ) ) {
        remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    }
}



//Toby-Fv2 added

//add_action('genesis_before_post_title', 'your_function');
//function your_function() {
//STUFF YOU WANT THE FUNCTION TO OUTPUT
//}

//Toby-added 12-may-2015
function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'posts_to_pages',
        'from' => 'post',
        'to' => 'page'
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );

//Toby-added 12-may-2015
// Find connected pages
$connected = new WP_Query( array(
  'connected_type' => 'posts_to_pages',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected pages
if ( false && $connected->have_posts() ) :
?>
<h3>Related pages:</h3>
<ul>
<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>

<?php 
// Prevent weirdness
wp_reset_postdata();

endif;



// ProCyber v38 below. MAKE 'HAMBURGER' RESPONSIVE MENU (copied to here, ThNrU)

// Don't add the opening <?php tag

// Register responsive menu script
/**
 * Enqueue responsive javascript
 * @author Ozzy Rodriguez
 * @todo Change 'prefix' to your theme's prefix
 */
function prefix_enqueue_scripts() {

	wp_enqueue_script( 'engage-responsive-menu', '/lib/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true ); // Change 'prefix' to your theme's prefix
	wp_enqueue_script( 'engage-js-image-behaviour', '/lib/js/image-behaviour-script.js', array( 'jquery' ), '1.0.0', true ); // Change 'prefix' to your theme's prefix
        
//        http://www.therapynearyou.com/wordpress2/lib/js/image-behaviour-script.js

}
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_scripts' );






//Hooks the 'eo_excerpt_filter' function to a specific (get_the_excerpt) filter action.
add_filter('get_the_excerpt','eo_excerpt_filter',5);
function eo_variable_length_excerpt($text, $length, $finish_sentence){
     //Word length of the excerpt. This is exact or NOT depending on your '$finish_sentence' variable.
     $length = 12; /* Change the Length of the excerpt. The Length is in words. */
      
     //1 if you want to finish the sentence of the excerpt (No weird cuts).
     $finish_sentence = 1; // Put 0 if you do NOT want to finish the sentence.
       
     $tokens = array();
     $out = '';
     $word = 0;
   
    //Divide the string into tokens; HTML tags, or words, followed by any whitespace.
    $regex = '/(<[^>]+>|[^<>\s]+)\s*/u';
    preg_match_all($regex, $text, $tokens);
    foreach ($tokens[0] as $t){ 
        //Parse each token
        if ($word >= $length && !$finish_sentence){ 
            //Limit reached
            break;
        }
        if ($t[0] != '<'){ 
            //Token is not a tag. 
            //Regular expression that checks for the end of the sentence: '.', '?' or '!'
            $regex1 = '/[\?\.\!]\s*$/uS';
            if ($word >= $length && $finish_sentence && preg_match($regex1, $t) == 1){ 
                //Limit reached, continue until ? . or ! occur to reach the end of the sentence.
                $out .= trim($t);
                break;
            }   
            $word++;
        }
        //Append what's left of the token.
        $out .= $t;     
    }
     
    return trim(force_balance_tags($out)); 
}
 
function eo_excerpt_filter($text){
    //Get the full content and filter it.
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
     
    $text = str_replace(']]>', ']]&gt;', $text);
     
    //If you want to Allow SOME tags: 
    $allowed_tags = '<p>,<a>,<strong>'; /* Here I am allowing p, a, strong tags. Separate tags by comma. */
     
    $text = strip_tags($text, $allowed_tags);
     
    //Create the excerpt.
    $text = eo_variable_length_excerpt($text, $length, $finish_sentence);  
    return $text;
}

  

//* Customize the post info function
add_filter( 'genesis_post_info', 'sp_post_info_filter' );
function sp_post_info_filter($post_info) {
if ( !is_page() ) {
	$post_info = '[post_date] by [post_author_posts_link] [post_comments] [post_edit]';
	return $post_info;
}}

//* Remove entry meta in entry footer
add_action( 'genesis_before_entry', 'engage_remove_entry_meta' );
function engage_remove_entry_meta() {
	
	//* Remove if not single post
	if ( ! is_single() ) {
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
	}

}

//* Hook after entry widget after entry content
add_action( 'genesis_after_entry', 'engage_after_entry', 9 );
function engage_after_entry() {

	if ( is_singular( 'post' ) )

	genesis_widget_area( 'after-entry', array(
		'before' => '<div class="after-entry" class="widget-area">',
		'after'  => '</div>',
	) );

}

//* Modify the size of the Gravatar in the author box
add_filter( 'genesis_author_box_gravatar_size', 'engage_author_box_gravatar' );
function engage_author_box_gravatar( $size ) {

	return 180;

}

//* Modify the size of the Gravatar in the entry comments
add_filter( 'genesis_comment_list_args', 'engage_comments_gravatar' );
function engage_comments_gravatar( $args ) {

	$args['avatar_size'] = 100;
	return $args;

}


//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'engage_remove_comment_form_allowed_tags' );
function engage_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	return $defaults;

}

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'after-entry',
	'name'        => __( 'After Entry', 'engage' ),
	'description' => __( 'This is the after entry widget area.', 'engage' ),
) );

//* Customize the credits ... WNY v13 24-Aug-2018
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo '<a href="http://www.wellbeingnearyou.com/privacy-policy">Privacy Policy</a> | <a href="http://www.wellbeingnearyou.com/contact">Contact us</a></p><p>';
	echo '&copy; Copyright ';
	echo 'WellbeingNearYou ';
	echo date('Y');
	echo '. All rights reserved.';
	echo '</p></div>';
}


//* Display 'After Entry' on Pages, and not just posts
add_action( 'genesis_after_entry', 'sk_after_entry_widget_area' );
/**
 * Display after-entry widget area on the genesis_after_entry action hook.
 *
 * Scope: Static Pages
 * 
 * @uses genesis_widget_area() Output widget area.
 */
function sk_after_entry_widget_area() {

	if ( ! is_singular( 'page' ) || ! current_theme_supports( 'genesis-after-entry-widget-area' ) ) {
		return;
	}

	genesis_widget_area( 'after-entry', array(
		'before' => '<div class="after-entry widget-area">',
		'after'  => '</div>',
	) );

}

//* Move location of Breadcrumbs v101.1 - 29-Apr-2017
//remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
//add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_breadcrumbs' );

