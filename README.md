<p align="center"><img src="https://blog.digital-pineapple.com.mx/wp-content/uploads/2020/11/Laravel8.jpg" width="400"></p>
<h1 align="left">Laravel 8 From Scratch</h1>

### Contents:
* [Introduction](#introduction)
* [Prerequisites](#prerequisites)
* [Technical Requirements](#technical-requirements)
* [Getting Started](#getting-started)
* [Migration](#migration)
* [Development](#development)

### Introduction

Laravel 8 From Scratch is a blog website where you can register, login, create, edit, delete or read other people's blogs.  

### Prerequisites
 * PHP@8.0 and up
 * mySQL
 * composer@2 and up

### Technical Requirements
 * [Laravel@8.x](https://github.com/laravel/laravel) - back-end framework
 

### Getting Started
1\. First of all you need to clone Laravel From Scratch repository from github:
```sh
git clone https://github.com/RedberryInternship/nanuka-laravel-8-from-scratch.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. Now we need to set our env file. You should provide **.env** file the necessary environment variables:
#
**SQLite:**
>DB_CONNECTION=mysql

>FILESYSTEM_DRIVER=public

#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```


#
### Development

Now you should link storage to public to display photos:

```sh
  php artisan storage:link
```

You can seed the database with by executing:

```sh
  php artisan db:seed
```

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
