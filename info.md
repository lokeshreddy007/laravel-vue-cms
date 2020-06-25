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
    php artisan make:controller PostsController --resource

```

#### Creating Request

```
    php artisan make:request Categories/CreateCategoryRequest
    php artisan make:request Categories/UpdateCategoriesRequest
    php artisan make:request Posts/CreatePostRequest
    php artisan make:request Posts/UpdatePostRequest

```

#### Cleaning Data base

```php
    php artisan migrate:refresh --seed
```

#### Linking Storage

```php
    php artisan storage:link
```

#### SoftDelete

```php
    php artisan make:migration add_soft_deletes_to_posts_table --table=posts
```
