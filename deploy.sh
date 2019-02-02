# Get the latest changes from repository
git pull origin master

# Install composer without dev dependencies
composer install --no-dev

# Install node dependencies
npm run prod

# Clear compiled views cache
php artisan view:clear

# Clear redis cache
php artisan cache:clear

# Optimize cached routes and configuration
php artisan optimize

# Refresh the seeders and Algolia index
php artisan migrate:refresh --seed --force

# Restart php-fpm to bust opcache
service php7.3-fpm restart
