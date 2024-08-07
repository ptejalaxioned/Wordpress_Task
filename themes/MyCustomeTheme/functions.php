<?php 
register_nav_menus(
    array("primary-menu"=>"Top Menu")
)
?>

<?php
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');
?>
<?php
// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Gutenberg editor for widgets
add_filter('use_widgets_block_editor', '__return_false');

// Disable the Gutenberg editor style
function disable_gutenberg_editor_styles() {
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'disable_gutenberg_editor_styles', 100);
?>