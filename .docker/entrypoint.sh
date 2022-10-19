#!/bin/bash
composer install

php artisan migrate

chmod 777 /app/storage -R && chmod 777 /app/bootstrap -R