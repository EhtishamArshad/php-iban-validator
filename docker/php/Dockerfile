FROM php:8.0.2-fpm-alpine
RUN apk update
RUN apk add oniguruma-dev

# lumen/laravel packages
RUN docker-php-ext-install mbstring tokenizer bcmath