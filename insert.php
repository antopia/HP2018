<?php
if(isset($_POST['Guardar']))
{
$SEXO= $_POST['SEXO'];
$MUNICIPIO= $_POST['MUNICIPIO'];
$PLATAFORMA= $_POST['PLATAFORMA'];
$NOMBRE= $_POST['NOMBRE']; 
$TELEFONO = $_POST['TELEFONO']; 

$PLACAS = $_POST['PLACAS'];
$cnn = mysql_connect('127.0.0.1', 'root', '') or die ("Error al Conectar");
mysql_select_db("uvne", $cnn);
$Guardar = "INSERT INTO CLIENTES (SEXO,MUNICIPIO,PLATAFORMA,FECHA,NOMBRE,TELEFONO,PLACAS)   VALUES ('$SEXO','$MUNICIPIO','$PLATAFORMA',NOW(),'$NOMBRE' ,'$TELEFONO','$PLACAS')"; 
mysql_query($Guardar);
mysql_close($cnn);
header('Location:registro.php');
}
else
{
echo '<script>alert("INGRESE DATOS")</script>';
	}

?>