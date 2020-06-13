<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require('dbconnection.php');

$mongo = DBConnection::instantiate();
$collection = $mongo->getCollection('users');


if(!is_null( $_POST['txtNombre']) && !is_null( $_POST['txtNombreUsuario']) && !is_null($_POST['txtPass'])) {
    
                         $nombre = $_POST['txtNombre'];
			$nombreusuario = $_POST['txtNombreUsuario'];
			$password = $_POST['txtPass'];
                        $direccion = array('ciudad' => 'Aldera', 'provincia' => 'Murcia');
                        $nacimiento = new MongoDate(strtotime('21-07-1997 00:00:00'));
                        
                        
                        $users = array(
                            
                            
                            "nombre" 		=> 	$nombre,
				"nombreusuario"		=>	$nombreusuario,
				"password"	=>	md5($password),
				"direccion"	=> 	$direccion,
				"nacimiento"   => $nacimiento
                        );
                            
                            
$collection->insert($users);  

$result = $collection->find();
    
    
}




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="style.css" /> 
        <link rel="stylesheet" href="css/sstyle.css">
          
    </head>

       <body>
    
               <p class="texto">Registro</p>
<div class="Registroo">
<form id="mostradados" name="exibedados" class="form-horizontal" action="<?php $_SERVER['REQUEST_URI']?>" method="post">

    <!-- <span class="fontawesome-user"></span> -->  <input type="text" name="txtNombre" id="txtNombre"   placeholder="Nombre" autocomplete="off" required >
<!-- <span class="fontawesome-lock"></span>--> <input  type="text" name="txtNombreUsuario" id="txtNombreUsuario"   placeholder="Nombre Usuario" autocomplete="off" required > 
            <!-- <span class="fontawesome-lock"></span>-->  <!-- <input type="text" name="txtFechaNaci" id="txtFechaNaci"  required placeholder="Fecha de Nacimiento" autocomplete="off" required> 
<!-- <span class="fontawesome-user"></span>--> <!-- <input type="text"   name="txtDireccion" id="txtDireccion"  placeholder="Direccion" autocomplete="off" required > 
<!-- <span class="fontawesome-user"></span>--><input type="password" name="txtPass" id="txtPass"   placeholder="Contraseña" autocomplete="off" required >



                                              
<!--<span class="fontawesome-lock"></span>--> <!-- <input type="password" name="txtPass" id="txtPass"  required placeholder="Contraseña" autocomplete="off"> --->
<!-- <span class="fontawesome-user"></span>--> <!--<input type="password"   name="txtPass2" id="txtPass2" required placeholder="Repetir Contraseña" autocomplete="off">
			
			<!-- 	 <input id="btnCancelar"  type="reset" value="Cancelar" />  -->
		<!--	<div class="control-group">
		  <label class="control-label" for="singlebutton">Registrar</label>
		  <div class="controls">

                      
		    <button id="singlebutton" name="singlebutton" class="btn btn-primary"  >Enviar datos</button>
                   
		  </div>
		</div>-->

                    <form method="POST">
                          <input type="submit" value="Registrar" />
                          <a href=login.php> 
                     </form>
                
                     <br></br>
                <input type="button" value="ir a Inicio Sesion" onClick="enviar('login.php')">
                
         
                    
  
                        </form>                        
              
        </div>
    </body>
</html>