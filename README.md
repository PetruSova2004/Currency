<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction

This project is a test assessment. It is made with Laravel 10, laradock.

## Installing

Make sure you have PHP and Composer installed globally on your computer.

Clone the repo and enter the project folder
```
git clone git@github.com:PetruSova2004/Currency.git
cd Currency
```

Install all needed dependencies
```
composer install
npm install
```

After all dependencies are installed add configuration file. You have to make a .env file and paste there content from .env.example.
```
cp .env.example .env 
```

Generate an app key
```
php artisan key:generate
```

Install laradock into your project by following the [steps](https://laradock.io/getting-started/)

After you have installed laradock, go to docker-compose.yml inside laradock and enter the version at the very beginning:
```
version: "3"
...
```

Now you can run your project
```
cd laradock/
docker-compose up -d nginx mysql phpmyadmin workspace
```

The next step is to run migrations and seeds locally.
```
php artisan migrate
```

Great! Now you can use this project. You can open it by accessing [this link](http://localhost/).



