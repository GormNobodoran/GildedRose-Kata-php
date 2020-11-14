FROM php:7.2-fpm


WORKDIR "/application"
RUN apt-get update \
    && apt-get install -y libicu-dev libpng-dev libjpeg-dev libpq-dev  \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install intl gd mbstring
RUN apt-get update && apt-get install -y mysql-client \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
    && docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


ARG LOCAL_UID
ARG LOCAL_GID

RUN usermod -u ${LOCAL_UID:-33} www-data && groupmod -g ${LOCAL_GID:-33} www-data

