<?php
require_once'config.php';
require_once'functions.php';

$q = $_GET['Tests'];
if( isset($_GET['Tests'])) {
	$test_id = (int)$_GET['Tests'];
	$test_data = get_test_data($test_id);
	//var_dump($test_data); 
	echo "ul";
	foreach ($test_data as $key => $value)
	{
		foreach($value as $v)
		{
		echo "li". $v . "/li";
		}
	}
	echo "/ul";
}

?>

