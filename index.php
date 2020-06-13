<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
<head>
  <meta charset="UTF-8">
  <title>registro</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <!-- 
Design register pure CSS
Developed by @sebas 
-->  
<p class="texto">Ingresar</p>
<div class="Registro">
    <form method="post" action="validacionlogueo.php">

    <span class="fontawesome-user"></span><input type="number" name="txtUsuario" id="txtUsuario" value="" required placeholder="usuario" autocomplete="off">
    <span class="fontawesome-lock"></span><input type="password" name="txtContrasena" id="txtContrasena" value="" required placeholder="Contraseña" autocomplete="off"> 
<input type="submit" value="Ingresar" title="ingresar"> 
  
                        </form>
    
          <form method="POST" action="registrarusuario.html">
        <input type="submit" value="registrar usuario" />
        
        </form>
</div>
</body>
</html>
