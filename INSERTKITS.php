<?php
		require ('connect_db.php');
	$PLACAS= $_POST['PLACAS'];
     if(empty($PLACAS))
     {
        echo '<script>alert("Campo Vacio")</script> ';
        echo "<script>location.href='Control.html'</script>";
        } else {
$iniciar=mysqli_query($cnn,"select PLACAS from KITS where PLACAS='$PLACAS'");
$iniciar=mysqli_fetch_assoc($iniciar);
if(isset($iniciar)){
//Si existe que se va hacer
echo '<script>alert("E N T R E G A D O")</script> ';
echo "<script>location.href='Control.html'</script>";
} else {
if(isset($_POST['GUARDAR']))
{
$PLACAS = $_POST['PLACAS'];
$cnn = mysql_connect('127.0.0.1', 'root', '') or die ("Error al Conectar");
mysql_select_db("uvne", $cnn);
$GUARDAR = "INSERT INTO KITS (PLACAS)   VALUES ('$PLACAS')"; 
mysql_query($GUARDAR);
echo '<script>alert("ENTREGE KIT ")</script> ';
echo "<script>location.href='Control.html'</script>";
}
  }
}
?>