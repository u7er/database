<?php
	require('config.php');

	$db_handle = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	if (!$db_handle)
	    die('Unable to connect to MySQL: ' . mysql_error());
	
	echo 'Connected to MySQL successfully<br>';

	$sql_query = 'CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` CHARACTER SET utf8 COLLATE utf8_general_ci;';

    $ret_val = mysql_query($sql_query, $db_handle);
    if(!$ret_val)
       die('Could not create database `' . DB_NAME . '`: ' . mysql_error());

    echo 'Database `' . DB_NAME . '` created successfully<br>';

	$db_selected = mysql_select_db(DB_NAME, $db_handle);
	if (!$db_selected)
	    die ('Could not select DB "' . DB_NAME . '": ' . mysql_error());

	$sql_query = 
		'CREATE TABLE IF NOT EXISTS
			`notebook_br' . BR_NUM . '`(
				`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
				`name` VARCHAR(50),
				`city` VARCHAR(50),
				`address` VARCHAR(100),
				`birthday` DATE,
				`mail` VARCHAR(20)
			);';

    $ret_val = mysql_query($sql_query, $db_handle);
    if(!$ret_val)
       die('Could not create table `notebook_br' . BR_NUM . '`: ' . mysql_error());

    echo 'Table `notebook_br' . BR_NUM . '` created successfully<br>';

    $sql_query = 
    	"REPLACE INTO `notebook_br" . BR_NUM . "` (`id`, `name`, `city`, `address`, `birthday`, `mail`) VALUES 
    		('1', 'Максим', 'НСК', 'Где-то', '1990-01-20', '@mail'),
    		('2', 'Паша', 'НСК', 'Где-то', '1990-01-20', '@mail'),
    		('3', 'Саша', 'НСК', 'Где-то', '1990-01-20', '@mail')
    		;";

    $ret_val = mysql_query($sql_query, $db_handle);
    if(!$ret_val)
       die('Could not create records in table `notebook_br' . BR_NUM . '`: ' . mysql_error());

    echo 'New records table `notebook_br' . BR_NUM . '` created successfully<br><br>';

	mysql_close($db_handle);
?>