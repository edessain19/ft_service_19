FROM alpine

MAINTAINER Evrard Dessain <edessain@student.s19.be>

RUN apk update \
	&& apk upgrade \
	&& apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

RUN cd /tmp \
	&& curl -LO https://wordpress.org/latest.tar.gz \
	&& tar xzvf latest.tar.gz \
	&& mkdir /var/www/localhost/wordpress \
	&& cp -a /tmp/wordpress/. /var/www/localhost/wordpress \
	&& chown -R www-data:www-data /var/www/

COPY wp-config.php /www/wp-config.php

EXPOSE 5050
