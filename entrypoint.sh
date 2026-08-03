#!/bin/sh

# Vendor folder မရှိသေးပါက composer package များကို သွင်းပေးမည်
composer install --no-dev --optimize-autoloader

# Laravel Cache များကို ရှင်းပေးမည်
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Laravel Key မရှိသေးပါက ထုတ်ပေးမည်
php artisan key:generate --force

# Apache Server ကို စတင်ပေးမည်
exec apache2-foreground