## About

This is a simple website made using laravel 5.5 and materialize css framework, the website is equipped with admin panel where
you can add new page and edit the content, just like cms.


## Requirements
- Laravel 5.5
- PHP 7
- MySQL Database


## How to use
1. clone this repository, use git clone command `git clone https://github.com/kadekbagus/laravel-55-website.git`
2. run `composer install -vvv`
3. copy `.env.example` into `.env`, set the database config to match your environment
4. run `php artisan key:generate`
5. run migration `php artisan migrate`
6. run seeder `php artisan db:seed`
7. use `php artisan serve` or put it under real web server like apache
8. open the web with your favorite browser
9. go to `/admin` to open the admin panel, login with email `admin@admin.com` and password `123456`
10. enjoy!

## Features
- Dynamic page
- Mobile friendly
- Clean and minimalist layout


