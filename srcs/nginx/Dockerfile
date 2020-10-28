FROM alpine

MAINTAINER Evrard Dessain <edessain@student.s19.be>

RUN apk update \
	&& apk add nginx

RUN adduser -D -g 'www' www

RUN mkdir /www \
	&& chown -R www:www /var/lib/nginx \
	&& chown -R www:www /www

RUN rm /etc/nginx/nginx.conf
COPY srcs/nginx.conf /etc/nginx/

COPY srcs/index.html /www


EXPOSE 80 443

RUN nginx -t
