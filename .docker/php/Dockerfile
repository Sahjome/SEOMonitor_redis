FROM php:8.0-cli
RUN pecl install -o -f redis-5.3.7 \
 &&  rm -rf /tmp/pear \
 && docker-php-ext-enable redis 

COPY . /tmp
WORKDIR /tmp

CMD [ "php", "callingclass.php" ]