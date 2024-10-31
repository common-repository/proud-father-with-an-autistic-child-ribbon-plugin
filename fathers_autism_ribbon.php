<?php
/*
Plugin Name: Fathers with an Autistic Child Ribbon
Plugin URI: http://scottkappler.com/wp-plugins-and-more
Description: When activated, this plugin will put a small ribbon with a puzzle logo and the words "Proud Father with an Autistic Child" linking to http://www.facebook.com/Fatherswithchildrenwithautism) Facebook page on the top right corner of your website. Sponsor: RipeLocalDeals.com 
Author: Scott Kappler
Version: 1.0
License: GPLv2
Author URI: http://scottkappler.com/wp-plugins-and-more
*/

function render_fathers_autism_ribbon() {
	$ribbon_url = plugins_url( 'fathers_autism_ribbon.png', __FILE__ );
	echo "<a target='_blank' class='fathers_autism_ribbon' href='http://www.facebook.com/Fatherswithchildrenwithautism'><img src='{$ribbon_url}' alt='Proud Father with an Autistic Child' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_fathers_autism_ribbon' );