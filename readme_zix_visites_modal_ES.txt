Francesc Roca Rodríguez Pt07-M14 Dual | 2º DAW
----------------------------------------------

BIENVENIDO!

BASE DE DATOS:
Para ejecutar base de datos, basta con entrar en phpMyAdmin, hacer clic en "IMPORTAR", insertar el archivo m14-practica7_froca.sql
y se creará la BDD y las tablas con algunas visitas y un usuario.

ZIX(Archivos):
ZIX(Archivos) es una herramienta que permite subir archivos con extensión txt, pdf y jpg al sitio web, tantos como se desee.

-Es una adición a la práctica 6, así podemos hacer que cada usuario tenga su sitio donde guardar archivos

Archivos:
----------------
-zix.php:
Ante todo comprobamos que hay una sesión iniciada para que sólo los usuarios logueados puedan acceder.
Nos encontramos un tutorial de cómo utilizar la herramienta.
Tenemos un formulario que nos permite subir los archivos, este formulario llama a upload.php que hace el trabajo de guardar los archivos.
Tenemos un listado de todos los archivos que tenemos guardados en nuestra carpeta, cuando clicamos en algún archivo, se nos mostrará el contenido inmediatamente debajo.

-upload.php:
Código que guarda el archivo que sube el usuario

-leerArchivo.php:
Lee el contenido del archivo que elige el usuario al hacer click en el nombre del mismo en zix.php

-zix_model.php:
Código que muestra los nombres de los archivos que tenemos guardados en el directorio

Contador de visitas:
Conexión a una base de datos de phpMyAdmin donde guardamos el número de visitas en el sitio web.

Archivos:
----------------
-visitas.php:
Nos conectamos a la bdd que guardará las visitas y cada vez que llamemos este archivo aumentaremos las visitas recibidas.

Modal:
He creado un Modal que he decidido poner al principio de la página principal.
Creo que un Modal es una buena forma de informar al usuario de que el sitio web ha recibido cambios, actualizaciones o nuevo contenido.
En el Modal que creo, informo al usuario de que el sitio ahora dispone de la herramienta ZIX, le doy un link directo a la página para que pueda probarlo.

MEJORAS hechas en la práctica:
Mejoras en ZIX(Archivos):
-Mini tutorial de cómo utilizar la herramienta.
-Poder subir y visualizar archivos de otras extensiones y mostrarlos, como PDF, JPG... Lo he hecho añadiendo más extensiones
aceptadas en el archivo upload.php, la visualización de imágenes la realizo comprobando si el archivo que estamos leyendo es una imagen
y por tanto mostrarla en una etiqueta html por imágenes ("img"). El pdf lo muestro comprobando si el archivo es pdf y con el siguiente
código html <embed src="files/ejemplo.pdf" type="application/pdf" width="100%" height="600px" />
-Crear un MODAL en la página principal que informa al usuario de la adición de esta nueva herramienta
-Hacer que el listado de archivos sean links que sólo sea necesario clicar lo que queramos para ver el contenido.
Al principio la idea era que el usuario escribiera el nombre del archivo para mostrarlo pero así lo encuentro mucho más cómodo.
-Crear botón que permita dejar de visualizar el archivo abierto y lo deje en blanco

Mejoras en Contador de visitas:
-Colocar el contador de visitas en todas las páginas que visualiza el usuario

Mejora extra (MODAL):
-Añadir un MODAL para informar a los usuarios de que hemos introducido nuevas herramientas en el sitio web

Propuestas de MEJORAS: EXPLICAR CÓMO LO HARÍA
Mejoras por ZIX(Archivos):
-Si lo guardo en local, poder crear carpetas y subcarpetas con mkdir de php.
-Poner el contenido del archivo mostrado en un textarea y que se pueda modificar el contenido del archivo y enviar para que se guarden
las modificaciones realizadas
-Tener los archivos guardados en una base de datos externa, necesitaría hacer inserts en la base de datos.
-Teniendo la mejora de colgar los archivos en una base de datos, hacer que nos podamos descargar los archivos por si nos
encontramos en un ordenador diferente

Mejoras por Contador de visitas:
-Añadir contador de visitas específico para cada página, que compruebe a qué página estamos en cada momento y nos muestre las visitas que ha recibido aquella página específica, aparte de las visitas generales en todo el sitio.
-Teniendo hecha la mejora propuesta anteriormente, crear un "ranking" que indique qué páginas tienen más visitas en cada momento.

----------------------------------------------
Francesc Roca Rodríguez Pt07-M14 Dual | 2º DAW
