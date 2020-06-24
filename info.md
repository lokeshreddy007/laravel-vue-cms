#### Authentication Quickstart

```php
composer require laravel/ui

php artisan ui vue --auth

```

#### Routes list

```php
php artisan route:list
```

#### Mysql

```sql
    sudo apt-get install php-mysql
    sudo mysql -p -u root
    create database todo_app;
    CREATE USER 'user'@'localhost' IDENTIFIED BY 'user';
    GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';
    use cms;
    show tables;
```

#### Creating model

```php
    php artisan make:model Post -m
    php artisan make:model Category -m
```

#### Creating Controller

```php
    php artisan make:controller CategoriesController --resource
```
