FROM alpine:3.12

MAINTAINER Evrard Dessain <edessain@student.s19.be>

RUN	apk update \
&&	apk upgrade \
&&	apk	add	php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session\
&& apk	add php-json php-mbstring

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz \
&& tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz \
&& rm phpMyAdmin-4.9.0.1-all-languages.tar.gz \
&& mv phpMyAdmin-4.9.0.1-all-languages Phpmyadmin

Run mkdir /www
RUN mv phpmyadmin/* /www/
RUN mkdir -p /run/phpMyadmin
COPY ./config.inc.php /www/config.inc.php

EXPOSE 5000