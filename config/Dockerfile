FROM php:7.4-fpm-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql 
RUN apk upgrade --update && apk add zlib-dev libpng-dev
RUN docker-php-ext-install gd 
RUN apk add autoconf gcc g++ make
RUN pecl install phalcon yaconf 
