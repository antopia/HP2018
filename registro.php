<!DOCTYPE html>
<html lang="es">

 <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
   
  <meta name="viewport" content="widht=device-widht, initial-scale=1.0">

</head>

 


<center>MONITOR GENERAL DE AMIGOS </center> <BR> <center>




<fieldset>
  <legend>CONSULTA DE AMIGOS </legend>
 
  <div>
<form name = "formulario" action="VALIDAR_PLACAS.php" method="post">

  
    <center>    

   <label for="PLACAS"><b>CORREO DE AMIGO</b></label>
    <input type="text" require id="PLACAS" name="PLACAS" size="45"> 
    </div>
<br>
  <H7><INPUT type="submit" name="VALIDAR" value="VALIDAR CORREO"></H7>
  </center>
</fieldset>

</form>	



     
            <h4>Favor de llenar los Datos:</h4> 
            
           

  <fieldset>
  <legend>ALTA DE AMIGOS </legend>
 
  
   <form name = "formulario" action="insert.php" method="post">
<center>  



   <div>  
<label for="SEXO"> <b>Soy</b> </label> 

  <input type="radio" name="SEXO" value="F">Mujer
  <input type="radio" name="SEXO" value="M">Hombre  
</div>
<BR>
 
<div>
<label for="MUNICIPIO"> <b>Municipio</b> </label>
<select name="MUNICIPIO">
    <option value="SANTA">Santa Catarina</option>
    <option value="SANP">San Pedro</option>
    <option value="MTY">Monterrey</option>
    <option value="GPE">Guadalupe</option>
    <option value="ESC">Escobedo</option>
    <option value="APO">Apodaca</option>
<option value="GRA">Garcia</option>
<option value="OTR">Otro</option>
  </select>
</div>
  <br>

<div>
<label for="PLATAFORMA"> <b>Universidad</b> </label>
<select name="PLATAFORMA">
    <option value="UVNE">UVNE</option>
    <option value="UANLY">UANL</option>
    <option value="TECNOLOGICO">TEC MTY</option>
    <option value="UVM">UVM</option>
    <option value="CONALEP">CONALEP</option>    
    <option value="UDEM">UDEM</option>
    <option value="METRO">UMM</option>
    <option value="REGIO">UR</option>
    <option value="SALLE">CESLAS</option>
    <option value="NORTE"> DEL NORTE</option>
    <option value="ALFONSO"> A REYES</option>
    
<option value="OTR">Otro</option>
  </select>
</div>
  <br>

<div>
    <label for="NOMBRE"> <b>Nombre</b> </label>
    <input type="text" id="NOMBRE" name="NOMBRE" size="45" >
  </div>
 
  <div>
    <label for="TELEFONO"><b>Teléfono</b></label>
    <input type="text"  id="TELEFONO" name="TELEFONO" size="45" >
   
  </div>
 

   <label for="PLACAS"><B>Correo</b></label>
    <input type="text" require id="PLACAS" name="PLACAS" size="45"> 
    </div>

<br><br>
  <INPUT type= "submit" name= "Guardar" value= "Registrame">
  </center>
</fieldset>

</form>		


			<center> <a href="home.html">Volver al Inicio</a></center>
 <hr class="soften"/>
<CENTER><p>&copy; Copyright HP2018<br>UVNE División Software </CENTER>