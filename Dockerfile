# Etapa 1: Construcción de la imagen
FROM php:8.2-fpm-alpine

# Instalar dependencias necesarias
RUN apk add --no-cache \
    bash \
    acl \
    unzip \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    nginx \
    nodejs \
    npm \
    supervisor \
    postgresql-dev \
    mysql-client \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip gd mbstring

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos de la aplicación
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Establecer permisos correctos
RUN chmod -R 777 storage bootstrap/cache

# Expone el puerto correcto
EXPOSE 10000

# Configura el comando de inicio del contenedor
CMD php artisan serve --host=0.0.0.0 --port=10000
