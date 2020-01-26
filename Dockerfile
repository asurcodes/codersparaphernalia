FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk add libzip-dev zip nodejs npm --update

RUN docker-php-ext-install zip mysqli pdo pdo_mysql

# Install node dependencies

COPY package.json .

RUN npm install

# Install composer dependencies

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');"

COPY . .

RUN php composer.phar install --no-dev

# Clear caches

RUN php artisan view:clear

RUN php artisan cache:clear

# Run build

RUN php artisan optimize

RUN npm run prod