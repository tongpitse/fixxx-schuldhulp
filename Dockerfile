FROM composer:1.5
FROM php:7.1.14-fpm-alpine

EXPOSE 80

RUN apk update \
 && apk upgrade

RUN apk add bash

RUN apk add nginx \
 && mkdir /run/nginx

RUN apk add postgresql-dev libmcrypt libmcrypt-dev \
 && docker-php-ext-install pdo_pgsql pgsql mcrypt opcache

COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

WORKDIR /
RUN mkdir /srv/app
COPY . /srv/app
WORKDIR /srv/app

ENV COMPOSER_ALLOW_SUPERUSER 1

ENTRYPOINT /srv/app/docker-entrypoint.sh