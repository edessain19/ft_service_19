FROM alpine:3.12

MAINTAINER Evrard Dessain <edessain@student.s19.be>

RUN apk update && apk add wget && mkdir /www \
&& apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

RUN wget https://wordpress.org/latest.tar.gz \
&& tar -xvf latest.tar.gz \
&& mv wordpress/* /www \
&& rm -rf /var/cache/apk/*
	
# We copy wordpress database config file
COPY wp-config.php /www/wp-config.php

# RUN  chown -R www-data:www-data /var/www/

EXPOSE 5050