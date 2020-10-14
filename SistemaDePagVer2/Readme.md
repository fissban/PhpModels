# Sistema de control de paginas con php
- Una segunda version de un sistema de control de paginas con php.

# Estructura de la pagina.
Index.php 
- nav (links de navegacion usando el parametros 'p' para indicar la pag a leer)
- include (que trae lo que se defina en el parametros 'p' que por default se trae el contenido de home.html)

# Observaciones
Todos los html, js y css que se indican en el parametros 'p' se buscaran dentro de './resource/'+p

# Ejemplo:
<a href="?p=home">Home</a>
$_GET['p'] -> esto tomara el valor 'home'

Por un tema de orden se definira<br>
$page = "./resource/$p/$p.html";<br>
$css = "./resource/$p/$p.css";<br>
$js =  "./resource/$p/$p.js";<br>

Por lo cual al pasarle 'home' de parametros el index.php incluira el contenido de:<br>
'./resource/home/home.html'.<br>
'./resource/home/home.js'.<br>
'./resource/home/home.css'.<br>
