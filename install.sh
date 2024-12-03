composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run build
