# Sistema de control de pag con php
- Una primera versios de un sistema de control de paginas con php.

# Estructura de la pagina.
Index.php 
- nav (links de navegacion usando el parametros 'p' para indicar la pag a leer)
- include (que trae lo que se defina en el parametros 'p' que por default se trae el contenido de home.html)

# Observaciones
Todos los html que se indican en el parametros 'p' se buscaran dentro de './resource/'

ejemplo:
<a href="?p=home">Home</a>
$_GET['p'] -> esto tomara el valor 'home'

Nosotros por un tema de orden se definira
$page = './resource/' . $_GET['p'] . '.html';

Por lo cual al pasarle 'home' de parametros el index.php incluira el contenido de './resource/home.html'.
