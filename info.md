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
    php artisan make:model Tag -m
    php artisan make:migration create_post_tag_table --table=post_tag
```

#### Creating Controller

```php
    php artisan make:controller CategoriesController --resource
    php artisan make:controller PostsController --resource

```

#### Creating Request

```
    php artisan makerequest Categories/CreateCategoryRequest
    php artisan make:request Categories/UpdateCategoriesRequest
    php artisan make:request Posts/CreatePostRequest
    php artisan make:request Posts/UpdatePostRequest
    php artisan make:request Tags/CreateTagRequest
    php artisan make:request Tags/UpdateTagRequest

```

#### Cleaning Data base

```php
    php artisan migrate:refresh --seed
    php artisan db:seed
```

#### Linking Storage

```php
    php artisan storage:link
```

#### SoftDelete

```php
    php artisan make:migration add_soft_deletes_to_posts_table --table=posts
```

#### Create Seeder

```php
    php artisan make:seeder UsersTableSeeder
```

php artisan make:controller UsersController
php artisan make:middleware VerifyIsAdmin
php artisan make:request Users/UpdateProfileRequest

php artisan make:seeder PostsTableSeeder
php artisan make:controller WelcomeController
php artisan make:controller Blog/PostsController

