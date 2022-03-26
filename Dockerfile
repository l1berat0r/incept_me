FROM php:5.6-apache
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update \
  && apt-get install -y mysql-server mysql-client --no-install-recommends  \
  && docker-php-ext-install pdo pdo_mysql 

RUN sed -i "s/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www/" /etc/apache2/apache2.conf \
    && sed -i "s/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www/" /etc/apache2/sites-enabled/000-default.conf \
    && rm -rf /var/www && mkdir -p /var/www

RUN mkdir /bootstrap
WORKDIR /bootstrap
ADD * /bootstrap/
ADD * /var/www/

RUN service mysql start
RUN service apache2 start

RUN chmod 700 bootstrap.sh
RUN ./bootstrap.sh

RUN usermod -u 1000 www-data
RUN chown -R www-data:www-data /var/www

WORKDIR /var/www/

ENTRYPOINT /bootstrap/entrypoint.sh
