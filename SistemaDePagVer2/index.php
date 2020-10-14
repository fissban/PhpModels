<?php

// por default se buscaran estos 3 archivos
$page = './resource/home/home.html';
$css = './resource/home/home.css';
$js =  './resource/home/home.js';

// si se define el parametro 'p' le asignaremos su contenido a:
// buscaremos si o si 3 archivos (html,css,js)
// porq? para hacer esto lo mas escalable posible, cada pag podra tener su propio css,js,html
if (isset($_GET['p']))
{
    $p = $_GET['p'];
    switch ($p)
    {
        case 'home':
        case 'catalogo':
        case 'nosotros':
        case 'contacto':
            $page = "./resource/$p/$p.html";
            $css = "./resource/$p/$p.css";
            $js =  "./resource/$p/$p.js";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="./resource/index.css"><!-- se carga un css general -->
    <link rel="stylesheet" href="<?php echo $css ?>"><!-- se carga el css de cada pag -->
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
    </header>
    <main>
        <?php include $page ?>
    </main>

    <!-- scripts -->
    <script src="./resource/index.js"></script><!-- se carga un js general -->
    <script src="<?php echo $js ?>"></script><!-- se carga el js de cada pag -->
</body>

</html>