<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

#phpstorm for laravel
Use the link's github below to know the functions's laravel to phpstorm
<p><a href="https://github.com/barryvdh/laravel-ide-helper"><img  src="https://img.shields.io/badge/download-github-green.svg" style="display: inline;"></a>
</p>

#start laravel
run laravel without create virtual host:
```
php artisan serve
```
#migration  laravel
run all migration for create table in database set in .env
```
php artisan migrate
```
create new migration
if use name create_nametable_table use for create migration no required use option --create but use format not formal need to use option --create because
can not create function default for class new migration create class by empty  function
```
php artisan make:migration create_nametable_table
```
if need know option use  below command:
```
 php artisan help make:migration
 
 
 Options:
       --create[=CREATE]  The table to be created
       --table[=TABLE]    The table to migrate
       --path[=PATH]      The location where the migration file should be created
       --realpath         Indicate any provided migration file paths are pre-resolved absolute paths
   -h, --help             Display this help message
   -q, --quiet            Do not output any message
   -V, --version          Display this application version
       --ansi             Force ANSI output
       --no-ansi          Disable ANSI output
   -n, --no-interaction   Do not ask any interactive question
       --env[=ENV]        The environment the command should run under
   -v|vv|vvv, --verbose   Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

```
after create migration need some change again run migration but not work migration because in status migration get run all migration 
you can get status migration use by command :
```
php artisan migrate:status
```
you can rollback migration back to last migration ,and again run migration for do change 
```
php artisan  migrate:rollback 
```