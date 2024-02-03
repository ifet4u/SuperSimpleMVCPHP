<?php


spl_autoload_register('autoLoad');

function autoLoad($url){
	$klasa = __DIR__."/Controller/$url.php";

	if(!file_exists($klasa)) {
		return false;
	}

	require $klasa;
}