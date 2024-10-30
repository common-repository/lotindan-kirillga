<?php
/**
 * Plugin Name: Lotindan kirillga
 * Plugin URI: https://savodxon.uz
 * Version: 1.0
 * Author: Javlon Juraev
 * Author URI: https://www.facebook.com/jjavlon
 * Description: Lotin yozuvidagi sayt matnini kirill yozuviga o'girib ko'rsatadigan plagin
 * License: GPL2
 */



add_action('wp_enqueue_scripts', 'lotindan_kirillga_style');
add_action('wp_footer', 'lotindan_kirillga_script');

function lotindan_kirillga_script() {
	$htmlOutput = '<button id="lotindan_kirillga" class="button button-primary" onclick="lotindanKirillgaOyna()">A</button>
		<div id="lotindan_kirillga_oyna">
			 <button id="lotindan_kirillga_lat" class="button button-primary" onclick="lotindanKirillgaTugma()">Kirill yozuvida o‘qish</button>
			 <button id="lotindan_kirillga_cyr" class="button button-primary" onclick="lotindanKirillgaTugma()">Лотинда ёзувида ўқиш</button>
		</div>';
    echo $htmlOutput;
	wp_register_script('lotindan-kirillga', plugins_url('lotindan-kirillga.js', __FILE__), '', '', true);
	wp_enqueue_script('lotindan-kirillga');
}
function lotindan_kirillga_style() {
	//wp_register_style('lotindan-kirillga', plugins_url('lotindan-kirillga.css', __FILE__), '', '', true);
	//wp_enqueue_style('lotindan-kirillga');
	wp_register_style('lotindan-kirillga', plugins_url('lotindan-kirillga.css', __FILE__));
	wp_enqueue_style('lotindan-kirillga');

}




