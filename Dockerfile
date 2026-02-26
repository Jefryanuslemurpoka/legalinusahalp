FROM php:8.4-cli

WORKDIR /var/www

COPY . .

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --optimize-autoloader --no-dev

CMD php artisan serve --host=0.0.0.0 --port=$PORT