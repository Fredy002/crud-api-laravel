#!/bin/bash

# Ejecutar migraciones
php artisan migrate --force

# Iniciar el servidor PHP-FPM
php-fpm &

# Iniciar Nginx
nginx -g 'daemon off;'
