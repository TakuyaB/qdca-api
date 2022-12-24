FROM php:8.1-fpm
COPY php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libonig-dev \
    vim \
    && docker-php-ext-install zip pdo_mysql mbstring opcache

WORKDIR /var/www/html

# Install Composer.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV PATH=$PATH:/root/composer/vendor/bin COMPOSER_ALLOW_SUPERUSER=1 COMPOSER_HOME=/composer

RUN composer global require "laravel/installer"