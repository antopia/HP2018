<?php
$cnn = new mysqli('127.0.0.1', 'root', '', 'uvne');

if ($cnn->connect_error) {
    die('Error de Conexion (' . $cnn->connect_error . ') '
            . $cnn->connect_error);
}
?>
