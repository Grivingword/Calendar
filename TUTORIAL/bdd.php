<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=calendario2;charset=utf8', 'homestead', 'secret');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
