#!/bin/sh

cd /var/www
php artisan key:generate
php artisan migrate
#php artisan migrate:fresh
php artisan db:seed
php-fpm