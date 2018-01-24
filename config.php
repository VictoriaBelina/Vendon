<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "Vendon");

$db = @mysqli_connect(HOST, USER, PASS,DB) or die('Without connection'); // Check connection
mysqli_set_charset($db, 'utf8') or die('Without');

