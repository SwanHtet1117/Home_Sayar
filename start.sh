#!/usr/bin/env bash
set -e

# Laravel storage & cache folders များ သေချာရှိစေရန်နှင့် permission ပြန်ပေးခြင်း
mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
#
php artisan config:clear
# Database migration run ခြင်း (environment variables များ ရရှိပြီးချိန်)
php artisan migrate --force

# Apache foreground ဖြင့် စတင်ခြင်း
exec apache2-foreground