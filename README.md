

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

## 🚀 Acerca del Proyecto

Este es un proyecto desarrollado con el framework Laravel, proporcionando una API backend para gestionar datos. Implementa autenticación, CRUD y manejo de errores.

---

## 🛠 Requisitos

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu sistema:

- **PHP** (>= 8.2)
- **Composer** ([Descargar Composer](https://getcomposer.org/))
- **Laravel** (Opcional, si deseas utilizar comandos globales)
- **Base de Datos** (MySQL o PostgreSQL recomendado)
---

## 📥 Instalación y Configuración

### 1️⃣ Clona este repositorio
```sh
git clone https://github.com/fireckoner100/laravel_api.git
cd laravel_api
```

### 2️⃣ Instala las dependencias de Laravel
```sh
composer install
```
### 3️⃣ Copia el archivo de entorno y configura tu base de datos
```sh
cp .env.example .env

Edita el archivo .env y actualiza las siguientes variables según tu configuración de base de datos:
    
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

```

### 4️⃣ Genera la clave de la aplicación
```sh
php artisan key:generate
```

### 5️⃣ Ejecuta las migraciones y seeders para la base de datos
```sh
php artisan migrate --seed
```

### 6️⃣ Levanta el servidor de desarrollo
```sh
php artisan serve
```