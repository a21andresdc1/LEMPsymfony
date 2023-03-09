FROM php:fpm as core-php

RUN apt update

RUN apt install -y curl bash libcurl4-openssl-dev libssl-dev libzip-dev libjpeg-dev libpng-dev libfreetype6-dev libxml2-dev libonig-dev libexif-dev
RUN apt-get update && apt-get install -y bash

RUN docker-php-ext-install -j$(nproc) curl
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) exif
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) mbstring
RUN docker-php-ext-install -j$(nproc) pcntl
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install -j$(nproc) soap
RUN docker-php-ext-install -j$(nproc) sockets
RUN docker-php-ext-install -j$(nproc) xml
RUN docker-php-ext-install -j$(nproc) zip

RUN apt install -y libicu-dev
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install -j$(nproc) opcache
RUN pecl install apcu
RUN docker-php-ext-enable apcu

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN apt install -y unzip

FROM bitnami/symfony as sv-symfony

WORKDIR /
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN apt update && apt install -y curl build-essential git
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash
ENV PATH "$PATH:/root/.symfony/bin"

RUN apt install -y symfony-cli

WORKDIR /var/www/html
CMD \
chmod -R 777 /opt/bitnami/php/var/run &&\
cd symfony &&\
rm -rf .git && chmod -R 777 . && \
composer install &&\
symfony serve

