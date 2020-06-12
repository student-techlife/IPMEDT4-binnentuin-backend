# Nginx proxy server
FROM nginx:1.19.0-alpine

COPY ./laravel /var/www
ADD ./nginx/vhost.conf /etc/nginx/conf.d/default.conf