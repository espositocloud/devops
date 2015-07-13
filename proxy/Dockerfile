FROM nginx:1.9

MAINTAINER Antonio Esposito "kobe@befair.it"

COPY tls_params /etc/nginx/
COPY uwsgi_params /etc/nginx/

RUN rm -f /etc/nginx/conf.d/*
COPY . /etc/nginx/conf.d
