FROM php:7.2-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache \
    libzip-dev \
    unzip

ARG USER_UID=1000
USER $USER_UID

WORKDIR /srv
COPY . /srv