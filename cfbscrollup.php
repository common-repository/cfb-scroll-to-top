<?php
/*
Plugin Name: CFB Scroll To Top
Version: 1.0
Plugin URI: http://codefairbd.com
Description: Simply install this plugin and show scroll to top button on your wordpress site.......
Author: Robin Islam
Author URI: http://codefairbd.com
License: GPLv2 or later
*/
//Adding Latest jQuery from Wordpress
function scrollup_insert_jquery(){
   wp_enqueue_script('jquery');
}
add_filter('init','scrollup_insert_jquery');
//define plugin path and url
define( 'CFB_SCROLLUP_URL', plugin_dir_url( __FILE__ ) );
define( 'CFB_SCROLLUP_DIR', plugin_dir_path( __FILE__ ) );
//Add requires file
require_once( CFB_SCROLLUP_DIR . 'script.php' );
//Active scrollup js here
function cfb_srollup_active_hook() {?>
	<script type="text/javascript">
		jQuery(function () {
		  jQuery.scrollUp({
			scrollName: 'scrollUp', // Element ID
			topDistance: '300', // Distance from top before showing element (px)
			topSpeed: 300, // Speed back to top (ms)
			animation: 'fade', // Fade, slide, none
			animationInSpeed: 200, // Animation in speed (ms)
			animationOutSpeed: 200, // Animation out speed (ms)
			scrollText: "", // Text for element
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		  });
		});
	</script>
<?php
}
add_action('wp_head', 'cfb_srollup_active_hook');