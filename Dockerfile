# Gunakan image dasar PHP 8.2 dengan server Apache
FROM php:8.2-apache

# Instal dependensi sistem yang dibutuhkan: git, unzip, dan library untuk ekstensi PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_pgsql zip bcmath

# Atur direktori kerja di dalam container
WORKDIR /var/www/html

# Salin semua file dari proyek Anda ke dalam container
COPY . .

# Instal Composer (dependency manager untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instal semua dependensi proyek Laravel (sekarang seharusnya berhasil)
RUN composer install --no-dev --optimize-autoloader && php artisan migrate --force

# Ubah kepemilikan file agar bisa ditulis oleh server Apache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Pindahkan file konfigurasi Apache yang sudah kita siapkan
COPY ./.docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Expose port 80 untuk server web
EXPOSE 80