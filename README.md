## Laravel
Este es un proyecto de ejemplo de un portal web, creado usando laravel, vite, breeze, html, css y javascript.

### Especificaciones técnicas
- Laragon 
-  Environment 
	- Laravel 10.48.20
	 - PHP  8.1.10
     - Composer  2.4.1
     - URL localhost - pretty url http://portal.test
     - Vite Bundler

### Configuración

Este es el paso a paso del proceso de configuración:

#### Configuración de Laravel y Laragon

1. Descargar [Laragon full](https://laragon.org/download/) e instalar usando el wizard de instalación
2. Abrir Laragon iniciar el servidor y la base de datos en el botón start
3. En la barra de tareas, clic derecho sobre el ícono de Laragon->Quick App->laravel, esto iniciará el proceso de instalación de laravel en la terminal
4. Ingresar el nombre del proyecto y los datos solicitados
5. Esperar a que se descarguen las dependencias y archivos
6. Ingresar a la url que se indico en el proceso de instalación, para el ejemplo de este repositorio sería http://portal.test

#### Configuración Breeze

[Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze-installation) es un starter kit que se puede vincular con Laravel, para hacer la gestión de autenticación de usuarios al proyecto, para instalar este kit se realizan los siguientes pasos:

1. Abrir la terminal e ingresar a la carpeta del proyecto
2. Descargar la dependencia de breeze usando composer, el administrador de paquetes de php corriendo el comando			

	```
	composer require laravel/breeze --dev
	``` 
3. Instalar breeze
	```
	php artisan breeze:install
	```
4. Crear la base de datos que requiere breeze, para esto se ejecuta la migración que es un archivo con la información de las tablas que se deben crear para soportar el proceso de autenticación
	```
	php artisan migrate
	```
5. Por último instalar las dependencias definidas en el archivo package.json y correr el build para generar los archivos del frontend del proceso de autenticación
``` 
    npm install
    npm run dev
```
7. En el menú que aparece en la consola seleccionar laravel + blade, ya que no se usará un framework ni herramienta adicional en este proceso.


