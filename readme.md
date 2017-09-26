## Description

Here used [Admin LTE](https://almsaeedstudio.com/preview) Dashboard integrated with [Laravel](https://laravel.com/) 5.5 and also included Laravel Authentication.

## Installation Guide

Step 1:
```
git clone https://github.com/NinjaRasel/laravel-adminlte
```
Step 2:

- Go to project directory and create .env file like as:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
- Give database credential into .env file. Here give an example: 
```
DB_DATABASE=adminlte
DB_USERNAME=root
DB_PASSWORD=root
```
Step 3:

- Go to project directory and open CMD (for Windows users) or terminal (for Linux users) and run the given command:
```
composer install
```
If composer isn't installed in PC then go to this [link](https://getcomposer.org/) to install composer.

Step 4:
```
php artisan key:generate
```
 
Step 5:
```
php artisan migrate:fresh --seed
```

Step 6:
```
php artisan serve
```
- Now run from browser – http://localhost:8000
- Login Credential : 
```
rasel@dev.com
123456
```

## Contact

**Md Rasel Ahmed**

*Lead Software Engineer*

*Contact No*: +880 1521 224958

*Email*: ninja.rasel@gmail.com

*Facebook*: [facebook.com/NinjaRasel](https://facebook.com/ninja.rasel)

*Web*: [rasel.ninja](http://rasel.ninja)