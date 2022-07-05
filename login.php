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
                    <tr><td style="background-color: #FFFFFF;padding-bottom:10px;"><label>Iniciar Sesión</label></td></tr>
                    
                    <tr><td><label>Usuario</label></td></tr>

                    <tr><td><input type="text" name="usuario" placeholder="Ingresar usuario" required></td></tr>

                    <tr><td><label>Contraseña</label></td></tr>

                    <tr><td><input type="password" name="contra" placeholder="Ingresar password" required></td></tr>

                    <tr><td><input type="submit" name="ingresar" value="Ingresar"></td></tr>

                    <tr><td><a href="actualizar_contra.php">¿Olvidaste tu contraseña?</a><br><br><a href="registro.php">Registrarse</a></td></tr>

                </table>
            </form>
        </div>
    </body>
</html>

<?php

    session_start();
    if(isset($_SESSION['usuarioname']))
    {
        header("location: login-v.php");
    }

    if(isset($_POST['ingresar']))
    {
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="prueba";

        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            die("No hay conexión: ".mysqli_connect_error());
        }

            $nombre=$_POST['usuario'];
            $pass=$_POST['contra'];

            $query=mysqli_query($conn,"Select * from loginn where usuario = '".$nombre."' and passwordd = '".$pass."'");
            $nr=mysqli_num_rows($query);

            if(!isset($_SESSION['usuarioname']))
            {
                if($nr == 1)
                {
                    $_SESSION['usuarioname']=$nombre;
                    header("location: login-v.php");
                }
                else if ($nr == 0)
                {
                    echo "<script>alert('Usuario no existe');window.location = 'login.php' </script>";
                }
            }
    }
?>