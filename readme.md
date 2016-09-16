# Laravel CRUD Demo

### environment usage
- php 5.6
- laravel 5.3
- mysql 5.7
- virtualBox
- vagrant 1.8.5

### install guide

##### project && lib clone
```
git clone git@github.com:TWsky/laravel_CRUD_demo.git
composer install
```

##### build dev environment of vagrant
```
copy .env.example -> .env
composer require laravel/homestead --dev
php vendor/bin/homestead make
vagrant up
```

### Done Feature: login && CRUD
- usr/pwd : azure820529@gmail.com / 00000000
- CRUD of Posts
