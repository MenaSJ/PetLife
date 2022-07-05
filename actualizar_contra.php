<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div align="center">
                <form method="POST">
                    <table>
                        <tr><td style="background-color: #FFFFFF;padding-bottom:10px;"><label>Cambiar Contraseña</label></td></tr>
                        
                        <tr><td><label>Usuario</label></td></tr>

                        <tr><td><input type="text" name="usuario" placeholder="Ingresar usuario" required></td></tr>

                        <tr><td><label>Contraseña</label></td></tr>

                        <tr><td><input type="password" name="passwordd" placeholder="Ingrese su nueva password" required></td></tr>

                        <tr><td><input type="submit" name="actualizar" value="Aceptar"></td></tr>

                        <tr><td><a href="login.php">Regresar</a></td></tr>
                    </table>
                </form>
            </div>
    </body>
</html>

<?php
    if(isset($_POST['actualizar'])){
        $conexion=mysqli_connect("localhost","root","")or die("No se ha podido encontrar al servidor");
        mysqli_select_db($conexion,"prueba")or die("No se ha podido conectar a la base de datos"); 
        $act="UPDATE loginn SET passwordd='$_POST[passwordd]' WHERE usuario= '$_POST[usuario]'" ;
        mysqli_query($conexion,$act);
        mysqli_close($conexion);
    }
?>