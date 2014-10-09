<?php
error_reporting(0);

/*$start = microtime(true);*/

$boostrap_dir = __DIR__;
$template_dir = __DIR__;

try{

	include_once($boostrap_dir.'/../app/bootstrap/bootstrap.php');

	$app 		= new App();
	$resources 	= new Resources();

	include_once($boostrap_dir.'/../app/views/basetemplate/index.php');

}
catch(Exception $e){

	echo'<pre>';
	print_r($e->getMessage());
	echo'</pre>';
	
}

/*$end = microtime(true);

printf("<p style='text-align: center;'>Page was generated in %f seconds</p>", $end - $start);
*/
?>