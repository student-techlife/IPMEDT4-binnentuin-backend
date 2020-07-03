FROM php:7.4-fpm

# Update & install requirements voor laravel
RUN apt-get update && apt-get install -y \
    openssl \
    zip \
    unzip \
    git \
    default-mysql-client \
    iputils-ping \
    libonig-dev

# Install Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install extra PHP modules
RUN docker-php-ext-install mbstring pdo pdo_mysql

# Add backend files
WORKDIR /var/www
ADD . /var/www
RUN chown -R www-data:www-data /var/www
RUN composer install

# Configure a healthcheck to validate that everything is up&running


# Add start script geef authorisation en draai
COPY app.sh /tmp
RUN ["chmod","+x","/tmp/app.sh"]
ENTRYPOINT ["/tmp/app.sh"]

# Expose Laravel op poort 9000
EXPOSE 9000