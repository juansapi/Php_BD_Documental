<?php
require 'dbconnection.php';

$mongo = DBConnection::instantiate();

$gridFS = $mongo->database->getGridFS();

$objects = $gridFS->find();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title>Repositorio</title> 
        <link rel="stylesheet" href="styles.css"/>
         <link rel="stylesheet" href="css/sstyle.css">
    </head>
    <body>
        <div id="contentarea">
            <div id="innercontentarea">
         <a style="float:right;" href="logout.php">Log out</a>
                  <p class="texto">Repositorio de </p>
                <p class="texto">   documentos </p>
                <table class="table-list" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="40%">Caption</th>
                            <th width="30%">Filename</th>
                            <th width="*">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($object = $objects->getNext()): ?>
                        <tr>
                            <td><?php echo $object->file['caption']; ?></td>
                            <td>
                                <a href="image.php?id=<?php echo $object->file['_id'];?>">
                                    <?php echo $object->file['filename']; ?>
                                </a>
                            </td>
                            <td ><?php echo ceil($object->file['length'] / 1024).' KB'; ?></td>
                        </tr>
                        <?php endwhile;?>
                    </tbody> 
              </table>
            </div>
        </div>
        
        <div class="Registroo">
           <form method="POST">
               
                <a href=upload.php>
               <input type="button" value="Cargar Documento" onClick="enviar('upload.php')">
               
                        <br></br>
                 <a href=profile.php>
               <input type="button" value="Perfil" onClick="enviar('profile.php')">
                         </div>
        
        
        
    </body>
</html>