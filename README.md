# Portfolio
## Deploying Laravel app
### Dirs:  
- mkdir -p storage/framework/cache  
- mkdir -p storage/framework/sessions  
- mkdir -p storage/framework/views  
- chmod -R 777 storage (if Linux / Mac)

Composer install

php artisan key:generate  
php artisan migrate

Deployment notes Vimexx
- Public folder should be in public_html
- Laravel app should be in laravel-app
