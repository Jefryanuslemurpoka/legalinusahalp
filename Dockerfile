FROM php:8.4-cli

WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl \
    && docker-php-ext-install zip

COPY . .

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --optimize-autoloader --no-dev

RUN chmod -R 775 storage bootstrap/cache

RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache
    
CMD php -S 0.0.0.0:$PORT -t public