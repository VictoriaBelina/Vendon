<?php

function getDb() {
	return new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS);   //conection to DB
}

