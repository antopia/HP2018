<?php 
if(isset($_POST['borrar']))
{

$cnn = mysql_connect('127.0.0.1', 'root', '') or die ("Error al Conectar");
mysql_select_db("uvne", $cnn);
$var = "Truncate table kits";
mysql_query($var) or die(mysql_error());
echo '<script>alert("LIMPIEZA REALIZADA ")</script> ';
echo "<script>location.href='Control.html'</script>"; 
} 
?>