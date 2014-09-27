<?php
/**
 * Plugin Name: WooCommerce SocialShare
 * Plugin URI: https://github.com/marcelocmenezes/SocialShare
 * Description: Plugin de Compartilhamento Sociais para WooCommerce
 * Author: Marcelo Menezes
 * Author URI: https://github.com/marcelocmenezes
 * Version: 1.0
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


if ( ! class_exists( 'SocialShare' ) ) :

class SocialShare {
		
	
	 
	
	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';
	
	
	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;
	
	/**
	 * Inicialização do plugin.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts',  array ( $this, 'enqueue_scripts'), 0 );
		
		add_action( 'woocommerce_share', array( $this, 'product_share' ), 99 );
	}

	/**
	* Return an instance of this class.
	*
	* @return object A single instance of this class.
	*/
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
	
		return self::$instance;
	}
	
	/**
	 * Função que registra o CSS e o JS do plugin.
	 */
	public function enqueue_scripts() {
		
		wp_enqueue_style( 'style-socialshare', plugins_url( 'assets/css/socialshare.css', __FILE__ ) );
		

		wp_enqueue_script( 'facebook', plugins_url( 'assets/js/scripts.js', __FILE__ ) );

		
	}
			

	
	/**
	 * Função que exibe os botões de compartilhamento na pagina do produto. 
	  */
	public function product_share(){
		
		
		echo '
			<div class="socialshare">
				<span class="facebook" onclick="return facebook_click()"></span>
				<span class="googleplus" onclick="return googleplus_click()"></span>
				<span class="twitter" onclick="return twitter_click()"></span>
				<span class="linkedin" onclick="return linkedin_click()"></span>
			</div>';
		
		

	}
	
}

add_action( 'plugins_loaded', array( 'SocialShare', 'get_instance' ), 0 );



endif;
