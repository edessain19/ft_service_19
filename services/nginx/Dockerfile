FROM alpine:3.12

MAINTAINER Evrard Dessain <edessain@student.s19.be>

# install core service
RUN apk update \
	&& apk add vim \
	&& apk add nginx \
	&& apk add openssl

# creating new user and groupe `www`for nginx
RUN adduser -D -g 'www' www

# create a directory for html files
RUN mkdir /www \
	&& mkdir -p /run/nginx \
	&& chown -R www:www /var/lib/nginx \
	&& chown -R www:www /www

# backup of original nginx.conf file and remove it
RUN rm /etc/nginx/nginx.conf
COPY ./srcs/nginx.conf /etc/nginx/

# install SSL
RUN mkdir /etc/nginx/ssl \
	&& openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/www.pem -keyout /etc/nginx/ssl/www.key -subj "/C=BE/ST=Bxl/L=Bruxelles/O=s19/OU=edessain/CN=ft_services"

# copy html into www
COPY srcs/index.html /www

EXPOSE 80 443

RUN nginx -t

CMD ["nginx", "-g", "daemon off;"]
