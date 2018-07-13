# Fictional Code
This is the source code for my first ever laravel web application.\
This site is LIVE! @ https://fictionalcode.herokuapp.com/  
Go make an account and post <3

# Install locally
MAKE SURE YOU HAVE 1. GIT(Optional if you mannually download) 2. PHP(version 7.2.5 or above) 3. COMPOSER

```
git clone https://github.com/itsbaldeep/fictionalcode.git
cd fictionalcode
composer install
```

PHPMyAdmin -> New Database 'fictionalcode' -> Import -> fictionalcode.sql (included in repo)\
Setup the .env file (Database host, Database name, Database user and password)

```
php artisan key:generate
php artisan serve
```

Finally go to local server, 127.0.0.1:8000

# Technologies Used
1. Bootstrap (front-end)
2. Laravel (back-end)
3. Sass (development)
4. Laravel Mix (Webpack) (development)
5. Laravel Collective - HTML & Forms (forms in create post page, edit post page etc)
6. Unisharp CKEditor (for posts)
7. XAMPP (development)
8. Artisan, Tinker and Eloquent ORM (development, databases)
9. Node.js (Dependency Manager)
10. Composer (Dependency Manager)
11. Blade PHP (Laravel inclusive)

# Languages Used
1. HTML
2. CSS
3. JavaScript
4. PHP

# Features
1. CRUD for posts
2. Login and Register for users
3. Pages like Index, About and Contact
4. Security by authorization
5. Custom Bootstrap Theme
6. Dashboard for users
