<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# MusicBand

Project e-commerce made with 

[PHP](http://php.net/manual/fr/index.php) v7.1.11 

[LARAVEL](https://laravel.com/docs/5.5) v5.5

[BLADE](https://laravel.com/docs/5.5/blade),

[BOOTSTRAP](https://getbootstrap.com/docs/3.3/getting-started/), v3.3.7

[CSS](https://www.w3schools.com/css/css3_intro.asp) v3,

![alt text](public/uploads/screen.png)


## Prérequis

- Php
- Composer
- Artisan
- Mysql


### Install composer.json

- composer install


### Importer les tables

Les paramètres de la DB sont réglable dans  .env, par default la:

| DB            | user          | password  |
| ------------- |:-------------:| ---------:|
| musicband_db  | root          |           |

##### pour générer les tables

- "php artisan migrate"

### Demarrer le serveur Laravel

- "php artisan serve"

### Utiliser le Backend

- Créer un utilisateur via la page register.
- Augmenter les droits directement dans la DB.
- Se connecter avec cet utilisateur (le menu backend est maintenant disponible).

#### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).


