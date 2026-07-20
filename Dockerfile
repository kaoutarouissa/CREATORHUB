# 1. Njibou l-image l-asassiya dyal PHP (fpm mzyana l-serveur web)
FROM php:8.2-fpm

# 2. N7eddou l-blassa fin ghadi yekhdem Docker l-dakhl dyal l-container
WORKDIR /var/www

# 3. N-installiw les dépendances dyal systeme lli kay7tajhom PHP w Laravel
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    libgd-dev

# 4. Nms7ou l-cache dyal apt bach tkon l-image khfifa
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# 5. N-installiw les extensions dyal PHP (B7al pdo_mysql bach tkhdem l-database)
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-external-gd
RUN docker-php-ext-install gd

# 6. Njibou Composer (L-moudir dyal les packages dyal PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 7. N-copiw l-code dyal l-projet kaml mn l-PC dyalek l-dakhl dyal Docker
COPY . /var/www

# 8. Nqaddou les permissions bach l-serveur yqder yqra w ykteb f l-fichiers
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# 9. N7ellou l-port 9000 bach nqdro n-tconnectaw b PHP-FPM
EXPOSE 8000

# 10. L-commande lli ghat-lancer l-serveur mnin ych3el l-container
CMD ["php", 'artisan', 'serve']
