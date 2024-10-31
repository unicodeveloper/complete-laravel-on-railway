#!/bin/bash
# Make sure this file has executable permissions, run `chmod +x start.sh`
# Run migrations, set up nginx conf and run nginx
php artisan migrate && node /assets/scripts/prestart.mjs /assets/nginx.template.conf  /nginx.conf && (php-fpm -y /assets/php-fpm.conf & nginx -c /nginx.conf)