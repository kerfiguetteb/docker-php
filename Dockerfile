FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev unzip git \
    && docker-php-ext-install pdo pdo_mysql intl zip \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html