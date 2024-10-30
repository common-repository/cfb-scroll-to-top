<?php
//Loading css here
function cfbscrllup_css(){
	 wp_enqueue_style( 'cfb_scrollup_css_main', plugins_url( '/css/style.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'cfbscrllup_css' );
//Loading sript here
function cfbscrllup_js(){
	wp_enqueue_script( 'scrollUp_main_js', plugins_url( '/js/jquery.scrollUp.min.js' , __FILE__ ) , array( 'jquery') , false);
}
add_action( 'wp_enqueue_scripts', 'cfbscrllup_js' );