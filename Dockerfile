FROM php:8.0-fpm

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install opcache
RUN pecl install xdebug && docker-php-ext-enable xdebug