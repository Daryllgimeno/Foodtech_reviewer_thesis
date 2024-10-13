# Use the official PHP image with the desired version
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Node.js and npm (change the version as needed)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Set the working directory
WORKDIR /var/www

# Copy composer.lock and composer.json first to leverage Docker caching
COPY composer.lock composer.json ./

# Install PHP dependencies using Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --optimize-autoloader

# Copy the rest of the application files
COPY . .

# Install Node.js dependencies
RUN npm install

# Expose the ports for Laravel and Vite
EXPOSE 8000 5173

# Start the PHP built-in server (or use any web server you prefer)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
