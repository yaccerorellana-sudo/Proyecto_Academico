<?php
/*
proporcionar una platilla de configuración para conectar 
*la base de datos de mysql*/
/*este archivo no contiene contraseñas reales se puede cargar al git*/
#estableser la dirección del servidor mysql
$host = "127.0.0.1";
$puerto = "3306";
#nombre de la base de datos
$baseDatos = "proyecto_Academico";
#usuario de la base de datos
$usuario = "academico_user"; 
#contraseña de administrados
$contraseña = "academico";
#retornar estos valores como si fuera un arreglo asociativo.
return [
    "host" => $host,
    "port" => $puerto,
    "database" => $baseDatos,
    "username" => $usuario,
    "password" => $contraseña
];
