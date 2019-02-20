FROM php:7.0-apache

RUN apt-get update && apt-get -y upgrade && apt-get -y install git
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN git clone https://github.com/evilnapsis/bookmedik.git

COPY Database.php /var/www/html/bookmedik/core/controller/Database.php

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

EXPOSE 80

CMD /usr/sbin/apache2ctl -D FOREGROUND

