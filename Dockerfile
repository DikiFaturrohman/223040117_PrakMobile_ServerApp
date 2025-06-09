# Gunakan image dasar PHP 8.2 dengan server Apache
FROM php:8.2-apache

# Instal ekstensi PHP yang umum dibutuhkan oleh Laravel
RUN docker-php-ext-install pdo pdo_mysql bcmath

# Instal ekstensi untuk PostgreSQL (karena kita pakai database Render)
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql

# Atur direktori kerja di dalam container
WORKDIR /var/www/html

# Salin semua file dari proyek Anda ke dalam container
COPY . .

# Instal Composer (dependency manager untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instal semua dependensi proyek Laravel
RUN composer install --no-dev --optimize-autoloader

# Ubah kepemilikan file agar bisa ditulis oleh server Apache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Pindahkan file konfigurasi Apache yang sudah kita siapkan
COPY ./.docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Expose port 80 untuk server web
EXPOSE 80