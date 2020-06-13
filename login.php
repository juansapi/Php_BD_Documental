<?php

$action = (!empty($_POST['login']) && ($_POST['login'] === 'Ingresar')) ? 'login' 
                                                                      : 'show_form';

switch($action)
{
    case 'login':
        
        require('session.php');
        require('user.php');
        
        $user = new User();
        
        $nombreusuario = $_POST['nombreusuario'];
        $password = $_POST['password'];
        
        if ($user->authenticate($nombreusuario, $password)) {            
            header('location: profile.php');
            exit;
        }else {
            
            $errorMessage = "nombreusuario/password no coinciden.";
            break;
        }
    
    case 'show_form':
    default:
        $errorMessage = NULL;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="style.css" /> 
        <link rel="stylesheet" href="css/style.css">
        <title>Autenticación</title>
    </head>

    <body>
    
               <p class="texto">Identifícate</p>
                                 
                    <div class="Registro">
                        <form id="login" action="login.php" method="post" accept-charset="utf-8">
                            <ul>
                                <?php if(isset($errorMessage)): ?>
                                <li><?php echo $errorMessage; ?></li>
                                <?php endif ?>
                                <li>
                              
                             <span class="fontawesome-user"></span><input class="textbox" tabindex="1" type="text"   placeholder="Usuario" name="nombreusuario" autocomplete="off"/>
                                </li>
                                <li>
                                    
                               <span class="fontawesome-user"></span><input class="textbox" tabindex="2" type="password"  placeholder="Contraseña" name="password"/>
                                </li>
                                <li>
                                    <input id="login-submit" name="login" tabindex="3" type="submit" value="Ingresar" />
                                    <br></br>
                                </li>
                                 </form>
    
                        <form method="POST" action="registrausuario.php">
                          <input type="submit" value="registrar usuario" />
        
                     </form>
                                <li class="clear"></li>
                            </ul>
                                            
              
        </div>
    </body>
</html>