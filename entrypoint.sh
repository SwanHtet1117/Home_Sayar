#!/bin/sh

# Cache မလိုလျှင် သို့မဟုတ် error တက်ပါက အောက်ပါအတိုင်း ရေးနိုင်ပါတယ်
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Apache သို့မဟုတ် PHP Server ကို စတင်စေခြင်း
exec apache2-foreground