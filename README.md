<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Nombre
TURN-ERO API, este es el backend del PIN del curso Fullstack de MundosE.

## Descripcion
El backend esta desarrollado en PHP utilizando el Framework Laravel. Laravel nos permite realizar un proyecto escalable gracias a que implementa un patron de disenio MVC. En nuestro caso desarrollamos una API Rest para recibir contactos desde un formulario.

## Deploy
Actualmente se encuentra realizado en Heroku, el enlace es el siguiente:
https://turnero-proyecto-integrador.herokuapp.com/

## Endpoints
<h3>Ruta para insertar un contacto</h3>
POST <h4>api/insertarContacto</h4>
<p>Se deben pasar los siguientes parametros: nombre, mail, telefono, mensaje</p>
<p>nombre: debe tener minimo 2 caracteres y maximo 100</p>
<p>mail: formato de mail con @ y . ademas la longitud maxima 100</p>
<p>telefono: formato solo numero y minimo 7 digitos</p>
                   
<h3>Ruta para actualizar un contacto</h3>
PUT <h4>api/actualizaContacto/{id}</h4>
<p>{id} del contacto</p>

<h3>Ruta para borrar un contacto</h3>
DELETE <h4>api/borrarContacto/{id}</h4>
<p>{id} del contacto</p>

<h3>Ruta para obtener un contacto</h3>
GET <h4>api/obtenerContacto/{id}</h4>
<p>{id} del contacto</p>

<h3>Ruta para obtener todos los contactos</h3>
GET <h4>api/obtenerContactos</h4>

## Autores
Florencia Escobar, Romina Dominguez, Carlos Oller.

## License
For open source projects, say how it is licensed.

## Project status
El proyecto se encuentra en desarrollo, actualmente solo esta realizada la landing page del mismo.
