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
6. En el menú que aparece en la consola seleccionar laravel + blade, ya que no se usará un framework ni herramienta adicional en este proceso.

### Configuración plantilla

Lo ideal es que mientras se entiende la arquitectura de laravel y su funcionamiento, empezar con un template gratuito, para este caso recomiendo alguno de los siguientes sitios:

 - [Theme wagon](https://themewagon.com/)
 - [W3Layouts](https://w3layouts.com/)
 - [HTML5 UP](https://html5up.net/)

Importante que la plantilla seleccionada, no tenga dependencias de jquery o de librerías desactualizadas (consultar si tiene repositorio o si aparece en [npmjs.com](npmjs.com)).

Las secciones de la carpeta de la plantilla descargada, se va pasando poco a poco al proyecto de Laravel, ubicando el archivo html en la carpeta de recursos (resources/views) y luego cambiandole la extension y el nombre de about.html a about.blade.php.

Finalmente se debe enlazar las rutas respectivas, sugiero empezar con las peticiones get, es decir el enlace que aparece en el menú de navegación de la plantilla, cambiar href="about.html" por href="/about" en cada enlace y en el enrutador que esta en la carpeta routes editar el archivo web.php con el siguiente código:

```
Route::get('/about', function () {
	return  view('about');
});
```

Observe que la vista, solo toma el nombre del archivo, sin la terminación blade.php.

### Configuración de vite (En construcción)

Vite es el bundler que viene instalado por defecto en las últimas versiones de laravel, acá dejaré algunas notas importantes para poder visualizar las plantillas correctamente, teniendo en cuenta configurar las rutas de las imágenes y otros recursos como archivos css y de javascript. 



