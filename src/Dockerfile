#STAGE 1
FROM composer:1.9.3 as composer

COPY . /var/www/geometric-shapes

WORKDIR /var/www/geometric-shapes

RUN composer install --no-dev --no-interaction --optimize-autoloader

#STAGE 2
FROM php:7.3-fpm

COPY --from=composer /var/www/geometric-shapes /var/www/geometric-shapes

WORKDIR /var/www/geometric-shapes

RUN chown -R www-data:www-data /var/www/geometric-shapes \
    && chmod -R 750 /var/www/geometric-shapes

RUN apt-get update && apt-get install --no-install-recommends --no-upgrade -y \
    unzip \
    libxml2-dev

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    sockets \
    json \
    soap \
    mbstring \
    opcache \
    && docker-php-source delete

RUN rm -rf /var/lib/apt/lists/* \
    && rm -rf /var/cache/apk/* \
    && apt-get clean \
    && apt-get autoclean

EXPOSE 9000
