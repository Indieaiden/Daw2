<?php
// Incluimos el archivo de la Clase ausar
require_once("Usuario.php");
// Crear un Objeto (una instancia de la Clase):
$pepe = new Usuario();
$pepe->setNombre("mohamed");
$pepe->setApellidos("lee");
$pepe->setNombreUsuario("pepitopiscinas");
$pepe->setPassword("1234");

echo "Nombre: ".$pepe->getNombre()."<br/>";
echo "Apellidos: ".$pepe->getApellidos()."<br/>";
echo "Usuario: ".$pepe->getNombreUsuario()."<br/>";
echo "Pwd: ".$pepe->getPassword()."<p/>";


$pepe->caminar();
$pepe->detenerse();
$pepe->detenerse();
?>
