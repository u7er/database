<?php
	ini_set('default_charset', 'utf-8');
	if (empty($_GET['lang']))
    	exit('Language: not defined ($_GET is empty)');
    	
	$lang = $_GET['lang'];
	print $lang == 'ru' ? 'Привет':'Hello';
?>
