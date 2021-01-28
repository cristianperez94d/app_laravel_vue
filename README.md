<h1 align="center">APP_LARAVEL_VUE</h1>

---

<p align="center"> 
  Aplicacion de ejemplo para el registro de clientes de una ciudad (CRUD), Realizada en Laravel 8 Y VueJs  
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Prerequisites](#prerequisites)

## About <a name = "about"></a>

Uso de sesion de usuarios con verificion de correo electronico y CRUD para la entidad Clientes y Ciudades

## Getting Started <a name = "getting_started"></a>

1. Crear la base de datos Mysql
2. Configurar el archivo .ENV para la base de datos y el envio de correos o usar log (para facilitar la depuracion mediante el archivo laravel.log)
3. Ejecutar
```
composer install
npm install
```
4. Ejecutar migraciones y seeds para crear las tablas y alimentar la base de datos con datos de prueba
```
php artisan migrate --seed
```
5. Ejecutar lo siguiente para visualizar el resultado de forma local
```
php artisan serve
```

## Prerequisites <a name = "prerequisites"></a>

- Instalar Composer
- Instalar NPM
