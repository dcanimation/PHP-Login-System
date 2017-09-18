<?php 
// if there is no constant defined called _CONFIG_ do not load this file
if(!defined('_CONFIG_')) {
	exit('You do not have a config file');
}

// our config is below

// Include the db.php file
include_once "classes/db.php";

$con = DB::getConnection();
?>