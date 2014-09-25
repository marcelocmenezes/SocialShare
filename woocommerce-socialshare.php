<?php
/**
 * Plugin Name: WooCommerce SocialShare
 * Plugin URI: https://github.com/marcelocmenezes
 * Description: Compartilhamento Sociais para WooCommerce
 * Author: Marcelo Menezes
 * Author URI: https://github.com/marcelocmenezes
 * Version: 1.0
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



/*****************************************************/
/* Fun��o que registra o CSS e o JS do plugin.       */
/*****************************************************/

function registra_scripts() {
	wp_enqueue_style( 'css-socialshare', plugins_url( 'assets/css/socialshare.css', __FILE__ ) );

	wp_enqueue_script( 'twitter-socialshare', plugins_url( 'assets/js/twitter.js', __FILE__ ) );
	wp_enqueue_script( 'facebook-socialshare', plugins_url( 'assets/js/facebook.js', __FILE__ ) );
	wp_enqueue_script( 'gplus-socialshare', 'https://apis.google.com/js/platform.js' );
}

add_action( 'wp_enqueue_scripts', 'registra_scripts' );


/*****************************************************/
/* Fun��o que exibe os bot�es de compartilhamento na */
/* pagina do produto.                                */
/*****************************************************/
function woocommerce_product_socialshare(){
	echo '
		<div class="fb-share-button" data-href="http://www.vingadoresfa.com.br/" data-layout="button"></div>
		<a class="twitter-share-button" data-dnt="true" data-count="none" data-via="marcelomenezes" href="https://twitter.com/share">Share on Twitter</a>
		<div class="g-plus" data-action="share" data-annotation="none" data-href="http://www.vingadoresfa.com.br/"></div>
		<div id="fb-root"></div>'
}
add_action('woocommerce_share','woocommerce_product_socialshare');