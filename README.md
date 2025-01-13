# 🛒 Tienda en Línea - Catálogo de Productos y Gestión de Pedidos

### **Descripción**
Este proyecto consiste en una tienda en línea que permite a los usuarios explorar un catálogo de productos, gestionar pedidos y administrar el inventario de manera eficiente. Incluye roles específicos para **administradores** y **clientes** con autenticación segura mediante JWT.

---

## 📋 **Requisitos del Proyecto**

### **Backend (Laravel)**

- **Autenticación JWT con roles**:
  - **Administrador**: Gestión completa del sistema.
  - **Cliente**: Navegación, compra y gestión de pedidos.
  
- **CRUDs Implementados**:
  1. **Productos**:
     - Campos: `nombre`, `descripción`, `precio`, `stock`, `imagen`.
  2. **Pedidos**:
     - Campos: `usuario`, `productos`, `total`, `estado`.
     
---

### **Frontend (Angular)**

#### **Páginas Implementadas**
1. **Página de Inicio**:
   - Listado de productos con opciones de filtro y búsqueda.
   - Diseño responsivo utilizando Angular Material.

2. **Carrito de Compras**:
   - Agregar productos al carrito.
   - Visualización del total acumulado.
   - Finalización de pedidos.

3. **Panel Administrativo**:

---

## 🚀 **Tecnologías Utilizadas**

| **Tecnología**       | **Descripción**                                        |
|-----------------------|--------------------------------------------------------|
| **Laravel**           | Framework PHP para el desarrollo del backend.          |
| **MySQL**             | Base de datos para almacenar productos, pedidos y usuarios. |
| **Angular**           | Framework JavaScript para el desarrollo del frontend.  |
| **Angular Material**  | Librería de componentes UI para un diseño moderno.     |
| **JWT (Json Web Token)** | Autenticación segura basada en tokens.             |

---

## 🛠️ **Instalación**

### **Requisitos Previos**
Antes de comenzar, asegúrate de tener instalados los siguientes componentes:

- [Composer](https://getcomposer.org/) (para el backend en Laravel)
- [Node.js y npm](https://nodejs.org/) (para el frontend en Angular)
- [MySQL](https://www.mysql.com/) (base de datos)
- [Git](https://git-scm.com/) (para clonar el repositorio)

---

### **1️⃣ Clonar el Repositorio**
```bash
git clone https://github.com/TuUsuario/TiendaEnLinea.git
cd TiendaEnLinea
```

2. Instalar Dependencias
Una vez dentro del directorio del proyecto, instala todas las dependencias de PHP necesarias utilizando Composer:

```bash
composer install
Este comando descargará e instalará todas las librerías definidas en el archivo composer.json.
```

3. Configurar el Entorno
Copia el archivo de ejemplo .env a .env:

```bash
cp .env.example .env

```
Luego, abre el archivo .env y configura las siguientes variables:

```bash
APP_NAME="YourAppName"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

```
4. Generar la Clave de la Aplicación
Genera una clave única para la aplicación:

```bash
php artisan key:generate
```

5. Migrar la Base de Datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

6. Ejecutar el Servidor Local
Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Accede al backend en http://127.0.0.1:8000.

