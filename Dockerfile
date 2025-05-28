# Base image PHP 8.2 FPM Alpine
FROM php:8.4-fpm-alpine

RUN apk update && apk upgrade
# Install dependencies Alpine & PHP extensions
RUN apk add --no-cache \
    bash \
    git \
    libzip-dev \
    zip \
    unzip \
    curl \
    oniguruma-dev \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    autoconf \
    gcc \
    g++ \
    make \
    shadow \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl intl xml opcache \
    && apk del gcc g++ make autoconf

# Install Composer (copy dari official Composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory Laravel
WORKDIR /var/www/html

# Copy semua file Laravel ke container
COPY . .

# Beri permission yang diperlukan (sesuaikan user sesuai kebutuhan)
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port php-fpm
EXPOSE 9000

# Jalankan php-fpm
CMD ["php-fpm"]




