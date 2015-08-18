<?php
/**
 * @package tinyletter-wp
 * @version 0.0.1b
 */
/*
Plugin Name: TinyLetter WordPress
Plugin URI: http://clicknathan.com/web-design/tinyletter-wordpress-plugin/
Description: A WordPress Plugin to sign-up users for the WordPress Site's TinyLetter.com subscription, as a small widget in a Post, Page, Sidebar or Footer.
Version: 0.0.1b
Author URI: http://clicknathan.com/ & https://github.com/faddah/
License: GPL
*/

// actions

add_action('widgets_init', 'tinyletter_wp_widget_init');

/* *
 * register widget
 */

function tinyletter_wp_widget_init() {
  register_widget(TinyLetter_WP_Widget);
}

/* *
 * widget class
 */

class TinyLetter_WP_Widget extends WP_Widget {
  public function TinyLetter_WP_Widget() {
    # code...
  }

  /* *
  * show widget form in Appearance / Widgets
  */
  function form($instance) {

  }

  /* *
  * save widget form
  */
  function update($new_instance, $old_instance) {

  }

  /* *
  * show widget in Post / Page
  */
  function widget($args, $instance) {

  }

}

?>
