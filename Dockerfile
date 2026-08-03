# PHP 8.4 Apache image ကို အသုံးပြုပါ
FROM php:8.4-apache

# လိုအပ်သော System Dependencies နှင့် PHP Extensions များ Install လုပ်ခြင်း
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql

# Working Directory သတ်မှတ်ခြင်း
WORKDIR /var/www/html
RUN a2enmod rewrite

# Increase upload limits to support admin image edits
RUN { \
    echo 'upload_max_filesize=20M'; \
    echo 'post_max_size=24M'; \
    echo 'memory_limit=256M'; \
    echo 'max_file_uploads=20'; \
} > /usr/local/etc/php/conf.d/uploads.ini

# Project ဖိုင်များအားလုံးကို copy ကူးခြင်း
COPY . .

# Storage နှင့် Cache ဖိုင်များအတွက် Permission ပေးခြင်း
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Entrypoint script ကို setup လုပ်ခြင်း
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Entrypoint ကို သတ်မှတ်ခြင်း
ENTRYPOINT ["entrypoint.sh"]

# Apache ကို စတင်ခြင်း
CMD ["apache2-foreground"]

EXPOSE 80