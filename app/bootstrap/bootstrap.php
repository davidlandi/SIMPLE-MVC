<?php
$core_dir = __DIR__;

try{

	include_once('/../app/core/app.php');
	
	include_once('/../app/core/basecontroller.php');

	include_once('/../app/core/resources.php');

	

}
catch(Exception $e){

	echo'<pre>';
	print_r($e->getMessage());
	echo'</pre>';

}