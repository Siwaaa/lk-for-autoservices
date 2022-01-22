# Intro

### Dev

```sh
php artisan serve
```
---
### Publish

Локально проделываем операции:
```sh
npm run prod # собираем frontend
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan passport:install # обновляем данные для аутентификации 
```

На **сервере**:
```sh
cd /var/www/u1572462/data/www/lk.waxoyl-spb.ru
git pull
```

Заменить строки в .env для установки настроек сервера и production mod
```sh
cp -f .env.example .env
```

---
#### Если есть изменения:
```sh
git checkout ИМЯ_ФАЙЛА
```
