<?php
    /* Empezamos la sesi¨®n */
    session_start();
 
    /* Creamos la sesi¨®n */
    $_SESSION['usuario'] = $_POST['usuario'];
 
    /* Si no hay una sesi¨®n creada, redireccionar al index. */
    if(empty($_SESSION['usuario'])) { // Recuerda usar corchetes.
        header('Location: home.html');
    } // Recuerda usar corchetes
?>
 
<?php
	require ('connect_db.php');

	$usuario = $_POST['usuario']; 
    $password =$_POST['password']; 
    if (empty($password))
     {
          
          echo "<script>location.href='home.html'</script>"; // 
     }

	$iniciar=mysqli_query($cnn,"SELECT * FROM USUARIOS WHERE USUARIO='$usuario'");
	if($iniciar=mysqli_fetch_array($iniciar)){
		if($password==$iniciar['PASSADMIN']){
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		
			echo "<script>location.href='registro.php'</script>";
		
		}else{
		if(empty($password))
     {
          
          echo "<script>location.href='home.html'</script>"; // Error significa que el campo esta vacio
     }
 		}
	}


$iniciar=mysqli_query($cnn,"SELECT * FROM USUARIOS WHERE USUARIO='$usuario'");// cada usuario lleva este scrip para ir a su seccion
	if($iniciar=mysqli_fetch_array($iniciar)){
		if($password==$iniciar['PASS2']){
			echo '<script>alert("BIENVENIDO A SUCURSAL")</script> ';
		
			echo "<script>location.href='Control.html'</script>";
		
		}else{
		if(empty($password))
     {
          
          echo "<script>location.href='home.html'</script>"; // Error significa que el campo esta vacio
     }
 		}
	}



	$iniciar=mysqli_query($cnn,"SELECT * FROM USUARIOS WHERE USUARIO='$usuario'");
	if($iniciar=mysqli_fetch_array($iniciar)){
		if($password==$iniciar['PASS1']){
			
			echo '<script>alert("BIENVENIDO A CONTROL  ")</script> ';
			echo "<script>location.href='Control.html'</script>";

		}else{


			echo '<script>alert("PASSWORD INCORRECTO")</script> ';
		
			echo "<script>location.href='Registro.html'</script>";
		}
				}else{
		
					echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR CONTACTE A SOPORTE TECNICO PARA INGRESAR")</script> ';
		
						echo "<script>location.href='home.html'</script>";	

	  }

	



?>