## About this project

This project is a simple CRUD with Laravel. It was made for a job interview.

## How to run this project

1. Clone this repository
```
git clone https://github.com/GustavoAMM/prueba
```
2. Install dependencies
```
composer install
npm install
```
3. Create a .env file
```
cp .env.example .env
```
4. Generate an app key
```
php artisan key:generate
```
5. Create a database and configure the .env file
6. Run migrations
```
php artisan migrate
```
7. Run the seeders
```
php artisan db:seed --class=RolesTableSeeder  
php artisan db:seed --class=UsersSeeder
php artisan db:seed --class=StudentsSeeder
php artisan db:seed --class=TeachersSeeder
```
8. Run the project
```
php artisan serve
npm run dev
```

## Data for testing

### Admin user
```
email: admin@admin.com
password: password
```

### User user
```
email: user@gmail.com
password: password
```


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>