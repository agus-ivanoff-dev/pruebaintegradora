<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


Alumno: Agustín Mariano Ivanoff

## Acerca del proyecto final integrador de PHP y MySQL Avanzado

He creado una aplicación web con la temática de la vinoteca / bodega Luigi Bosca, utilizando el framework Laravel (Patrón MVC).

El proyecto cuenta con las siguientes características:

1) Posee 7 secciones (Home, Productos, Contacto, Nosotros, y una sección de Login y registro de usuarios para poder acceder a la intranet).


2) En el apartado de "Contacto", tal como se muestra en el video, es posible enviar, luego de completar los campos de nombre, apellido, email, teléfono y comentarios, un mail con el debido formato HTML.

Para lograr esto se realizaron modificaciones en el archivo .env para poder utilizar los servicios de mail testing de mailtrap.io. Se muestra en el video de demostración que el proceso concluye satisfactoriamente.


3) En el apartado de "Registro", es posible registrar un nuevo usuario completando los campos requeridos (obligatorios) de:
    - Nombre de usuario
    - Correo electrónico
    - Contraseña
    - Confirmación de contraseña (debe coincidir con la contraseña señalada en el campo anterior, sino el registro no será posible).


4) En el apartado de "Login", una vez creado con éxito un usuario, podremos autenticarnos con dos datos que se solicitarán:
    - Nombre de usuario o email (se pueden ingresar cualquiera de ambas indistintamente).
    - Contraseña 

    Si el proceso es satisfactorio, se permitirá el acceso a la intranet, mostrando un texto de bienvenida, personalizado con el nombre del usuario logueado.
    Tambíen, hay una opción para cerrar sesión y que nos devuelve a la página de Login(se muestra en el video).

    - Tal como se pide, se encuentra un usuario habilitado por defecto cuyas credenciales son las siguientes:

##Usuario: admin
##Contraseña: admin



## URL del repositorio GitHub: <br>

<h6> <a href="https://github.com/agus-ivanoff-dev/pruebaintegradora"> Repositorio GitHub</a></h6>
 **(adjunto en formato zip el proyecto, ya que el de GitHub es el que toma DigitalOcean para deploy y tiene 
algunas variables/configuraciones cambiadas y presenta inconvenientes con la página de estilos al levantar el proyecto de forma local- en desarrollo)


## URL del proyecto en producción (hosteado en DigitalOcean):  <br>

<h6> <a href="https://pruebaintegradoraphp-7isw6.ondigitalocean.app/"> Proyecto Laravel hosteado en Digital Ocean</a></h6>


