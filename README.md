# LARAVEL DEMO APP

### Development setup
- Database MYSQL

DATABASE_NAME=laravel_demo_db
DATABASE_USER=root
DATABASE_PASSWORD=password

```
docker run --name mysql-local -v $PWD/data:/var/lib/mysql -e MYSQL_DATABASE=laravel_demo_db -e MYSQL_ROOT_PASSWORD=password -p 3306:3306 -d mysql:8.0

# remove container
docker stop mysql-local
docker rm mysql-local

# setup data
php artisan migrate
php artisan db:seed --class=DatabaseSeeder
```
