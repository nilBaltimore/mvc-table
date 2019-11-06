Como hacer desarrollar un patron MVC con php puro
https://www.youtube.com/watch?v=BEyNt7PAK0E&list=PLvRPaExkZHFkpBXXCsL2cn9ORTTcPq4d7&index=43

1) crear un archivo .htaccess que permite modificar appache el servidor web interpreta
las urls
RewriteRule ^(.*)$ index.php?url=$1 
Con esto habilita para que siempre se llame a index.php y el resto
sera tomado como el parametro url

desde index.php centralizaremos la creaccion de los controladores y demas

La url tendra el siguiente formato controlador/metodo

2) en core/ creamos un controller.php, view.php y model.php
que contendran la funcionalidad basica de cada capa

Cuando se cree un controlador, este crea automaticamente una vista
la cual tiene un metodo render al que se le pasa el nombre del la vista a mostrar.

3) En la carpeta views se crea una carpeta por cada controlador que se defina.

4) En cada carpeta de esta se crea un fichero index.php