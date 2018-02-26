<?php
		require ('connect_db.php');
	$PLACAS= $_POST['PLACAS'];
     if(empty($PLACAS))
     {
        echo '<script>alert("Campo Vacio")</script> ';
        echo "<script>location.href='registro.php'</script>";
        } else {
$iniciar=mysqli_query($cnn,"select PLACAS from CLIENTES where PLACAS='$PLACAS'");
$iniciar=mysqli_fetch_assoc($iniciar);
if(isset($iniciar)){
//Si existe que se va hacer
echo '<script>alert("AMIGO REGISTRADO")</script> ';
echo "<script>location.href='registro.php'</script>";
} else {
//Si no existe que pedo
echo '<script>alert("INGRESE SUS DATOS")</script> ';
echo "<script>location.href='registro.php'</script>";
}
  }
?>