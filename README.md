# Prueba Cactus Pele

## Requisitos

He utilizado un servidor Apache 2.4.57 con PHP 8.2.6 y MariaDB 10.11.3.
Para el desarrollo he utilizado VSCode con la extensión Live Sass Compiler, y Node 20.2.0 con Gulp para minimizar el archivo Javascript.


## Instalación

### Archivos

Clona el repositorio en la carpeta web de Apache, con el nombre **"prueba-cactus-pele"**.
El proyecto debería ser accesible desde la URL http://localhost/prueba-cactus-pele/

### Base de datos

Crea una base de datos de MySQL con el nombre "**prueba_cactus_pele**" y el cotejamiento "utf8mb4_unicode_520_ci".

```sql
CREATE DATABASE `prueba_cactus_pele` COLLATE 'utf8mb4_unicode_520_ci';
```

Importa la base de datos que está en la carpeta "**database**" del repositorio.

Los datos de acceso en mi servidor son:
* name: prueba_cactus_pele
* user: root
* pass: root
* host: localhost

Puedes configurar otros datos de acceso en el archivo "**wp-config.php**" de la carpeta "**public**".


## WordPress

Una vez instalado el proyecto puedes acceder a la web y al panel de administración de WordPress con los siguientes datos:

* URL: http://localhost/prueba-cactus-pele/public/
* Admin URL: http://localhost/prueba-cactus-pele/public/wp-login.php
  * user: cactus
  * pass: cactus

**Las páginas principales de la prueba son:**
* **Perros**: http://localhost/prueba-cactus-pele/public/perros/
* **Evento Canino**: http://localhost/prueba-cactus-pele/public/eventos-caninos/pawsome-fest/


## Desarrollo

### Sass y CSS

*El archivo "**main.css**" está incluido en el repositorio para que no tengáis que compilarlo.*

Para compilar archivos Sass uso la extensión Live Sass Compiler de VSCode.
La configuración para esta extensión en "**settings.json**" es:

```json
"liveSassCompile.settings.forceBaseDirectory": "/public/wp-content/themes/cactus/styles"
```

Sólo hay un archivo SCSS "main.scss", esta extensión genera el archivo "main.css" en la misma carpeta.

### Javascript

*El archivo "**main.min.js**" está incluido en el repositorio para que no tengas que compilarlo.*

Para minimizar el archivo "scripts/main.js" he usado Node y Gulp.

Si quieres instalar los paquetes necesarios ejecuta este comando en la terminal desde la carpeta del repositorio:

```bash
npm install
```

Si no tienes instalado Gulp de forma global, ejecuta el comando:

```bash
npm install --global gulp-cli
```

Para compilar el archivo Javascript ejecuta el comando desde la carpeta del repositorio:

```bash
gulp
```
La configuración de Gulp está en el archivo "**gulpfile.js**".
