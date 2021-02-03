# Skeleton Webserver, PHP and MySql environment
## Instructions 

Having docker and docker-compose installed on your computer, once cloned 
the repository will have to run the following:

```Shell script
docker-compose up -d
```

Once the 3 containers have been lifted, we launched a terminal against 
PHP container:

```Shell script
docker-compose exec php bash
```

And we install the project dependencies:

```Shell script
composer install
```

Once this is done, in the URL you'll http://localhost:8000 ll have our symfony app
newly installed.

</br>

# Esqueleto entorno Webserver, PHP y MySql
## Instrucciones 

Teniendo docker y docker-compose instalado en el equipo, una vez clonado 
el repositorio habrá que ejecutar lo siguiente:

```shell script
docker-compose up -d
```

Una vez levantados los 3 contenedores, lanzamos un terminal contra 
el contenedor de PHP:

```shell script
docker-compose exec php bash
```

E instalamos las dependencias del proyecto:

```shell script
composer install
```

Una vez hecho esto, en la URL http://localhost:8000 tendremos nuestra aplicación Symfony
recién instalada.
