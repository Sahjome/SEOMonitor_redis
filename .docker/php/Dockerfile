FROM php:8.0-cli
RUN pecl install -o -f redis-5.3.7 \
 &&  rm -rf /tmp/pear \
 && docker-php-ext-enable redis

RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer require vlucas/phpdotenv

COPY . /tmp
WORKDIR /tmp

CMD [ "php", "callingclass.php" ]