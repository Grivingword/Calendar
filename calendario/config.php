<?php
$usuario  = "homestead";
$password = "secret";
$servidor = "127.0.0.1:3306";
$basededatos = "calendario";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");


