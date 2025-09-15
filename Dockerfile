FROM php:8.2-apache

# Copy your PHP page into Apache’s default web root
COPY index.php /var/www/html/

EXPOSE 80
