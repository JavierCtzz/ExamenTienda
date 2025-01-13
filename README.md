Tienda en Línea

Este proyecto consiste en una tienda en línea con funcionalidades de catálogo de productos y gestión de pedidos. La solución está dividida en un backend desarrollado en Laravel y un frontend implementado en Angular.

Características
Backend (Laravel)
Autenticación JWT con roles:
Soporte para roles de administrador y cliente.

CRUDs implementados:
Productos:
Atributos: nombre, descripción, precio, stock, imagen.
Pedidos:
Atributos: usuario, productos, total, estado.

Página de inicio:
Listado de productos con opciones para filtrar y buscar.
Diseño responsivo utilizando Angular Material.
Carrito de compras.

Panel administrativo:
Gestión completa de productos (CRUD).
Listado de pedidos con opción para actualizar su estado.

Requisitos del Sistema
Backend (Laravel)
PHP >= 8.1
Composer
MySQL o PostgreSQL
Laravel >= 9.x

Paquetes adicionales:
tymon/jwt-auth para la autenticación JWT.
Frontend (Angular)
Node.js >= 16.x
Angular CLI >= 15.x

Paquetes adicionales:
@angular/material para el diseño responsivo.
rxjs para la gestión de estados reactivos.
Configuración del Proyecto
Backend

Clonar el repositorio:

bash
Copiar código
git clone <URL_DEL_REPOSITORIO>  
cd backend 

Instalar dependencias:

bash
Copiar código
composer install  

Configurar el archivo .env:

Base de datos (DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Generar la clave JWT:

bash
Copiar código
php artisan jwt:secret

Migrar las tablas y poblar datos iniciales:

bash
Copiar código
php artisan migrate --seed  

Iniciar el servidor:

bash
Copiar código
php artisan serve  

Frontend

Clonar el repositorio:

bash
Copiar código
git clone <URL_DEL_REPOSITORIO>  
cd frontend  

Instalar dependencias:

bash
Copiar código
npm install  

Iniciar el servidor de desarrollo:

bash
Copiar código
ng serve  

Acceder a la aplicación en:

http://localhost:4200 

Uso del Proyecto
Roles y Acceso
Administrador:
Puede gestionar productos y actualizar estados de pedidos desde el panel administrativo.
Cliente:
Puede explorar productos, agregar al carrito, y realizar pedidos.
CRUD de Productos y Pedidos
Desde el backend, las rutas están protegidas con autenticación JWT para garantizar la seguridad de las operaciones.
Filtrado y Búsqueda
Los productos pueden ser filtrados por:
Categorías.
Rango de precios.

Tecnologías Utilizadas
Backend
Laravel 9.x
MySQL/PostgreSQL
JWT Authentication
Frontend
Angular 10.x
Angular Material
