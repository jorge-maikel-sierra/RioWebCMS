FROM php:8.2-cli

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev \
    zip \
    git \
    curl

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el proyecto
COPY . /app
WORKDIR /app

# Instala dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Da permisos de escritura al almacenamiento y caché
RUN chmod -R 777 storage bootstrap/cache

# Expone el puerto para Laravel
EXPOSE 10000

# Comando de inicio

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000
