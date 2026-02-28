FROM php:8.4-cli

WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip curl \
    && docker-php-ext-install zip

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

COPY . .

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --optimize-autoloader --no-dev

# Install npm & build assets
RUN npm install
RUN npm run build

RUN chmod -R 775 storage bootstrap/cache
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache
    
CMD php artisan serve --host=0.0.0.0 --port=$PORT