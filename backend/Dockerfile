FROM php:8.1-rc-apache
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt-get update && apt-get install -y git

WORKDIR /var/www/html/

COPY . /var/www/html/

RUN a2enmod rewrite
 
# Install Composer
RUN curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/bin --filename=composer

RUN composer require openai-php/client
RUN composer require guzzlehttp/guzzle

RUN curl -sS https://getcomposer.org/installer | php

RUN php composer.phar update