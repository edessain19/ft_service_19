FROM alpine

MAINTAINER Evrard Dessain <edessain@stident.s19.be>

RUN apk update \
	&& apk upgrade \
	&& apk add mysql mysql-client \
	&& apk add --no-cache --upgrade bash \
	&& rm -rf /var/cache/apk/*

RUN mysql --version

COPY ./sql_init.sh .
COPY ./init_docker.sh .

RUN chmod 777 sql_init.sh
RUN chmod 777 init_docker.sh

EXPOSE 3306
