# HOSPISOFT V1


el favicon se puede descargar cualquier icono en formato .ico 

https://realfavicongenerator.net/


# AVANCE MAYO 14 2022

1. organizar el menu del panel con usuario activo
2. registro y encriptacion del paciente (algoritmo de hashing)-validacion de datos del lado del servidor
3. implementar el sistema de mensajes de la aplicacion (variables de sesion)
4. registro y encriptacion del paciente (Algoritmos de hashing)
5. login del paciente
6. Historias de usuarios (Territorium)---scrum


# validacion php

trim()  //limpia espacios en blanco el principio y el final
filter_var() // con los filtros
https://www.php.net

# algoritmos de encriptacion .....bcrypt
password_hash()



# tipo de errores
E_NOTICE = advertencia de posible error
E_WARNING = Error no tan grave, no rompe la ejecucion del script
E_ERROR = Fatales, paran el script (tumban el sistema)

# variables SESION

Debido a que el el protocolo HTTP es sin estado (stateless),no guarda las varibles entre diferentes programas.
es necesario crear variables de sesion; estas se crean como un arreglo dentro del navegador, para poderlas usar mientras el uso del navegador edte activo (Sesion)
las defino es php con session_start() ..... $_SESSION['nombreVariable']
Le puedo asignar valores

# archivos HTACCESS

Me sirve para configurar el servidor web (APACHE) ojo existe otro
servidor y el NGINX (Este corre en linux) == Dicen que es mas rapido = 