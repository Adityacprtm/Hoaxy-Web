# Adityacprtm.com 👨‍🚀
Built using Laravel

## Section 🚩
- About
- Resume
- Portfolio
- Contact

## Other Page 🔗
- Manage Main Website
- Mbeb
- VLSM
- Old Version 1
- Old Version 2

## How to Use

### With Docker 🐳
- Setup .env
- Setup `MYSQL_ROOT_PASSWORD` in `docker-compose.yml`
- `docker-compose --env-file .env up -d`
- `docker-compose exec app php artisan key:generate`
- `docker-compose exec app php artisan migrate`
- `docker-compose exec app php artisan config:cache`

### Without Docker
- Setup .env
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan config:cache`