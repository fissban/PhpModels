<?php

// $page sera por default el html que vamos a leer -> ./resource/home.html
$page = './resource/home.html';

// si se define el parametro 'p' le asignaremos su contenido a $page
// por ejemplo si p tiene el valor 'nosotros' indicamos que busque la pag en './resource/nosotros.html'
if (isset($_GET['p']))
{
    $page = './resource/' . $_GET['p'] . '.html';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <!--
                 El href:
                 - Siempre debe iniciar con '?'
                 - se indican los parametros que se leeran con $_GET, en el 1er caso a p se le asigna home asiq $_GET['p'] devolvera el valor 'home'
                -->
                <li> <a href="?p=home">Home</a> </li>
                <li> <a href="?p=catalogo">Catalogo</a> </li>
                <li> <a href="?p=nosotros">Nosotros</a> </li>
                <li> <a href="?p=contacto">Contacto</a> </li>
            </ul>
        </nav>

        <?php include $page ?>

    </header>
</body>

</html>