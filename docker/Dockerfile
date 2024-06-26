FROM arm64v8/php:8.1-fpm

ARG USER
ARG USER_ID
ARG GROUP_ID

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    bash \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    libpq-dev \
    libicu-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure intl
# Install MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli\
# Install BC Math
    && docker-php-ext-install bcmath

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./xdebug.ini "${PHP_INI_DIR}/conf.d"

RUN groupadd --force -g $GROUP_ID $USER
RUN useradd -ms /bin/bash --no-user-group -g $GROUP_ID -u 1337 $USER
RUN usermod -u $USER_ID $USER

USER $USER

EXPOSE 9000
EXPOSE 9003