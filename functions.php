<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    global $content_width;
    if (!isset($content_width)) {$content_width = 1920;}
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'blankslate')));
}
add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts()
{
    wp_enqueue_style('blankslate-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}
add_action('wp_footer', 'blankslate_footer_scripts');
function blankslate_footer_scripts()
{
    ?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter('document_title_separator', 'blankslate_document_title_separator');
function blankslate_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return '...';
    } else {
        return $title;
    }
}
add_filter('the_content_more_link', 'blankslate_read_more_link');
function blankslate_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">...</a>';
    }
}
add_filter('excerpt_more', 'blankslate_excerpt_read_more_link');
function blankslate_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">...</a>';
    }
}
add_filter('intermediate_image_sizes_advanced', 'blankslate_image_insert_override');
function blankslate_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    return $sizes;
}
add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('wp_head', 'blankslate_pingback_header');
function blankslate_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function blankslate_custom_pings($comment)
{
    ?>
<li <?php comment_class();?> id="li-comment-<?php comment_ID();?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter('get_comments_number', 'blankslate_comment_count', 0);
function blankslate_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

function additional_custom_styles()
{

    /*Enqueue The Styles*/
    wp_enqueue_style('uniquestylesheetid', get_template_directory_uri() . '/css/grid-gallery.min.css');
}
add_action('wp_enqueue_scripts', 'additional_custom_styles');

function additional_custom_scripts()
{
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/custom.js');
}
add_action('wp_enqueue_scripts', 'additional_custom_scripts');

/**
 * CUSTOM ANNOUNCEMENT WIDGET
 *
 */

/**
 * Register our sidebars and widgetized areas.
 *
 */
function announcement_widgets_init()
{

    register_sidebar(array(
        'name' => 'Announcement',
        'id' => 'announcement__section',
        'before_widget' => '<div class="announcement__container">',
        'after_widget' => '</div>',
        'before_title' => '<div class="announcement__text">',
        'after_title' => '</div>',
    ));
    
}
add_action('widgets_init', 'announcement_widgets_init');

/**
 * Add Announcement Widget
 *
 */

function announcement_register_widget()
{
    register_widget('announcement_widget');
}
add_action('widgets_init', 'announcement_register_widget');

class announcement_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            // widget ID
            'announcement_widget',
            // widget name
            __('Add Announcement', ' announcement_widget_domain'),
            // widget description
            array('description' => __('Drag this to the Announcement Section to the right to activate your Announcement Banner.', 'announcement_widget_domain'))
        );
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        //if title is present
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        //output
        /*
    echo __( 'For more Information, please see FAQ or Contact Us.', 'announcement_widget_domain' );
    echo $args['after_widget'];
     */
    }
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Default Title', 'announcement_widget_domain');
        }

        ?>
    <p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Announcement:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </p>
    <?php
}
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}






/**
 * CUSTOM PRODUCT WIDGET
 *
 */

/**
 * Register our sidebars and widgetized areas.
 *
 */
function product_widgets_init()
{

    register_sidebar(array(
        'name' => 'Store',
        'id' => 'product__section',
        'before_widget' => '<div class="product__container">',
        'after_widget' => '</div>',
        'before_title' => '<div class="product__text">',
        'after_title' => '</div>',
    ));
    
}
add_action('widgets_init', 'product_widgets_init');

/**
 * Add Product Widget
 *
 */

function product_register_widget()
{
    register_widget('product_widget');
}
add_action('widgets_init', 'product_register_widget');

class product_widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            // widget ID
            'product_widget',
            // widget name
            __('Add Product', ' product_widget_domain'),
            // widget description
            array('description' => __('Drag this to the Store Section to the right to build your product card.', 'product_widget_domain'))
        );

        
    }
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        //if title is present
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        //output
        /*
    echo __( 'For more Information, please see FAQ or Contact Us.', 'product_widget_domain' );
    echo $args['after_widget'];
     */
    }
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Default Title', 'product_widget_domain');
        }

        if (isset($instance['price'])) {
            $price = $instance['price'];
        } else {
            $price = __('Enter the Price here (19.99 for example)', 'product_widget_domain');
        }
        if (isset($instance['description'])) {
            $description = $instance['description'];
        } else {
            $description = __('Product Description', 'product_widget_domain');
        }
        ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Product Name:');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('price'); ?>"><?php _e('Price (19.99 for example):');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('price'); ?>" name="<?php echo $this->get_field_name('price'); ?>" type="text" value="<?php echo esc_attr($price); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Product Description:');?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo esc_attr($description); ?>" />
    </p>
    <?php
}
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['price'] = htmlentities($new_instance['price']);
        $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
        return $instance;
    }
}