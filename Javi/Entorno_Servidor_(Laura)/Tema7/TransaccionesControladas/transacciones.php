<?php
$Id = new mysqli("127.0.0.1", "u1", "key1", "mibd");
if ($Id ->connect_errno) {
echo "Falló conexión a MySQL: " . $Id ->connect_errno . " - " . $Id ->connect_error ;
exit;
}
$Id->autocommit(false);//quita el autocommit puesto a true por defecto
$Id->query("INSERT INTO test(n) VALUES (1)");//supuesta query mal hecha
$Id ->rollback();//rollback para no guardarlo y volver al estado antes de la query anterior
$Id ->query("INSERT INTO test(n) VALUES (2)");//supuesta query bien hecha
$Id ->commit();//commit



?>
