<?php
    session_start();
    if(isset($_SESSION['usuarioname']))
    {
        $usuarioingresado = $_SESSION['usuarioname'];
        echo"<h1>Bienvenido: $usuarioingresado </h1>";
    }
    else 
    {
        header('location: login.php');
    }

    if(isset($_POST['cerrar']))
    {
        session_destroy();
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <form method="POST">
            <input type="submit" name="cerrar" value="cerrar">
        </form>
        <header>
  <section class="wrapper">
		<nav>
			<ul>
				<li><a href="prueba.html">Inicio</a></li>
				<li><a href="#">Tutoriales</a></li>
				<li><a href="#">Cursos</a></li>
				<li><a href="#">Preguntame algo</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
    </nav>
        </section>
    </header>

    <section class="contenido wrapper">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus adipiscing commodo aliquet. Fusce bibendum orci magna, a pellentesque augue posuere sed. Ut bibendum magna tincidunt velit fermentum, eu laoreet arcu consectetur. Nullam nec enim sed justo fermentum sagittis. Nam varius dapibus risus, quis consectetur mauris. Praesent ut iaculis turpis. Phasellus congue tristique ligula et consequat.</p>

    <p>Vivamus leo neque, luctus ac dignissim non, vehicula ut diam. Morbi eu urna interdum, cursus tortor quis, aliquam quam. Aliquam quis tellus ante. Morbi aliquet quam sem, et molestie dolor aliquet sed. Vivamus vehicula turpis nunc, ut hendrerit ante pulvinar eu. Pellentesque consectetur risus sit amet nulla sagittis, sit amet condimentum nisl tristique. Aliquam sit amet arcu eget risus dapibus fringilla vitae quis nunc. Cras commodo laoreet nulla ac rutrum. Fusce quam felis, malesuada ut condimentum eu, vulputate sed justo. Duis ac rhoncus neque.</p>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>Nunc congue vel turpis id interdum. Praesent gravida dapibus dui id fringilla. Suspendisse potenti. Morbi fringilla arcu non tempor faucibus. Aliquam convallis quam sem, id eleifend risus sodales id. Aliquam sed mi eu leo tempus ultricies. Fusce euismod, nibh in adipiscing eleifend, eros enim pharetra tellus, sed aliquam purus est nec nunc. Praesent egestas leo a aliquam scelerisque. Curabitur a tincidunt libero, vel pharetra neque. Fusce vel urna diam. Duis in dui at quam mollis tristique eu non justo. Donec imperdiet nisl non faucibus bibendum. Suspendisse potenti.</p>

    <p>Vestibulum tempor tristique dignissim. Ut fermentum porttitor massa, non dictum risus. Proin aliquam, metus non pretium vehicula, ipsum ligula placerat est, ut pharetra ipsum sapien et nisi. Aliquam condimentum neque vitae felis elementum fringilla quis eu ante. Aenean dictum sem orci, commodo elementum urna fringilla sit amet. Integer dui elit, consectetur eget ante quis, eleifend egestas tellus. Suspendisse venenatis urna non turpis volutpat, eget vehicula ipsum ultricies. Fusce at rutrum nulla, id vulputate mi. Nunc cursus risus a sapien rutrum, eu dapibus nunc elementum. Sed id tincidunt tortor. Donec ipsum nulla, aliquet eu erat eu, sodales luctus lorem.</p>

    <p>Nullam ut sem lectus. Fusce accumsan vestibulum est porttitor egestas. Curabitur ac ultricies quam. Integer elementum tellus vitae nisl luctus, fringilla luctus metus congue. Duis nec diam posuere, pellentesque urna nec, rhoncus ligula. Vivamus pulvinar id nulla eget sodales. Nunc iaculis nibh massa, sed aliquam diam ornare vel. Suspendisse potenti. Integer nec ante turpis. Vivamus eleifend diam et porttitor pharetra. Vivamus tempus pretium elit, sit amet molestie diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce viverra posuere porta. Maecenas ut blandit massa, ut ultrices purus. Sed at porttitor urna. </p>
    </section>
    </body>
</html>
<style type="text/css">
    * {

padding: 0;
margin: 0;

}
p {
margin-bottom: 20px;
}
.wrapper {
width: 80%;
margin: auto;
overflow:hidden;
}
header {
background: rgba(0,0,0,0.9);
width: 100%;
position: fixed;
z-index: 10;
}

nav {
float: left; /* Desplazamos el nav hacia la izquierda */
}
nav ul {
list-style: none;
overflow: hidden; /* Limpiamos errores de float */
}
nav ul li {
float: left;
font-family: Arial, sans-serif;
font-size: 16px;
}
nav ul li a {
display: block; /* Convertimos los elementos a en elementos bloque para manipular el padding */
padding: 20px;
color: #fff;
text-decoration: none;
}
nav ul li:hover {
background: #3ead47;
}
.contenido {
padding-top: 80px;
}
</style>