<?php    
/*
Plugin Name: Mein Plugin
Description: Das Pluginbitet eine individuelle Suche an
 Shortcode:["mysuche"] 
*/
function plzSucheHTMLelemente() {
		echo '	<form method="get">   
				<input id="plz" type="text" placeholder="Suchen">
				<button type="button"  onclick="myFunction()" >submit </button>
				<p id="demo"><p>';
}

add_action('wp_enqueue_scripts','ava_test_init');

function ava_test_init() {
    wp_enqueue_script( 'plz-script.js', plugins_url( '/plz-script.js', __FILE__ ));
}

add_shortcode('mysuche', 'plzSucheHTMLelemente');

/*
function plzSuche() {	
	
	$plz = $_GET['plz'];
	echo 'Dein Ansprechpartner ist' . $plz ;
	
	
	$zahl= $_GET['plz'].value;
	switch ( $zahl) {
		case $zahl >= 1000&& $zahl < 7000:
			  echo ' zahl zwischen 1000 und 7000 ';
			break;
		case $zahl >= 7000&& $zahl < 9000:
			  echo ' zahl zwischen 7000 und 9000 ';
			break;
		case $zahl >= 8000&& $zahl < 14000:
			  echo ' zahl zwischen 8000 und 14000 ';
			break;
		case $zahl >= 14000&& $zahl < 15000:
			  echo ' zahl zwischen 14000 und 15000 ';
			break;
		case $zahl >= 15000&& $zahl < 17000:
			  echo ' zahl zwischen 15000 und 17000 ';
			break;
		case $zahl >= 17000&& $zahl < 20000:
			  echo ' zahl zwischen 17000 und 20000 ';
			break;
		case $zahl >= 20000&& $zahl < 23000:
			  echo ' zahl zwischen 20000 und 23000 ';
			break;
		case $zahl >= 23000&& $zahl < 240000:
			  echo ' zahl zwischen 23000 und 24000 ';
			break;
	   case $zahl >= 24000&& $zahl < 29000:
			  echo ' zahl zwischen 24000 und 29000 ';
			break;
		case $zahl >= 29000&& $zahl < 33000:
			  echo ' zahl zwischen 29000 und 33000 ';
			break;	
		case $zahl >= 33000&& $zahl < 34000:
			  echo ' zahl zwischen 33000 und 34000 ';
			break;
		case $zahl >= 34000&& $zahl < 35000:
			  echo ' zahl zwischen 34000 und 35000 ';
			break;
		case $zahl >= 35000&& $zahl < 36000:
			  echo ' zahl zwischen 35000 und 36000 ';
			break;
		case $zahl >= 36000&& $zahl < 38000:
			  echo ' zahl zwischen 36000 und 38000 ';
			break;
		case $zahl >= 38000&& $zahl < 40000:
			  echo ' zahl zwischen 38000 und 40000 ';
			break;
		case $zahl >= 40000&& $zahl < 48000:
			  echo ' zahl zwischen 38000 und 48000 ';
			break;
		case $zahl >= 48000&& $zahl < 50000:
			  echo ' zahl zwischen 48000 und 50000 ';
			break;
		case $zahl >= 50000&& $zahl < 63000:
			  echo ' zahl zwischen 50000 und 63000 ';
			break;
		case $zahl >= 63000&& $zahl < 66000:
			  echo ' zahl zwischen 63000 und 660000 ';
			break;
		case $zahl >= 66000&& $zahl < 80000:
			  echo ' zahl zwischen 66000 und 80000 ';
			break;
		case $zahl >= 80000&& $zahl < 99000:
			  echo ' zahl zwischen 80000 und 990000 ';
			break;
		case $zahl >= 99000&& $zahl < 1000000:
			  echo ' zahl zwischen 66000 und 1000000 ';
			break;
			
		default: 
			echo' Standardausgabe';
			break;
	}
}
*/