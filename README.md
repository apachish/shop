<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:
#config
Directory Permissions
After installing Laravel, you may need to configure some permissions. Directories within the  storage and the bootstrap/cache directories should be writable by your web server or Laravel will not run. If you are using the Homestead virtual machine, these permissions should already be set.

Application Key
The next thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer or the Laravel installer, this key has already been set for you by the php artisan key:generate command.

Typically, this string should be 32 characters long. The key can be set in the .env environment file. If you have not renamed the .env.example file to .env, you should do that now. If the application key is not set, your user sessions and other encrypted data will not be secure!


#phpstorm for laravel
Use the link's github below to know the functions's laravel to phpstorm
<p><a href="https://github.com/barryvdh/laravel-ide-helper"><img  src="https://img.shields.io/badge/download-github-green.svg" style="display: inline;"></a>
</p>

#start laravel
run laravel without create virtual host:
```
php artisan serve
```
in laravel combination tow function var_dump() and die() use dd();
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
##ORM (Object relation map) Eloquent
In laravel, there is a system, or in our way, we can map each row's dataBase to an object in the program, for example, 
an object of the product , when we query the database, gives us an object from the row of the database.
This kind of m of mvc laravel (models in laravel)
```
php artisan  make:model  Product
```
In the models, their names are singular names. The names of the tables are nouns.
 Each object's model is represented from a table row in our database.
 model create in folder app(namespace app)
The model was an interface layer between us and the database   
for create model and migration and controller by one command:
```
php artisan  make:model  Product -m -c 
```
   ##tinker
A console that accesses the app   
   ```
   php artisan tinker
   ```
   <img src="https://shop.apachish.com/img/tinker.jpg" alt="tinker"/>
   