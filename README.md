# MusicBand

Project e-commerce made with 

[PHP](http://php.net/manual/fr/index.php) v7.1.11 

[LARAVEL](https://laravel.com/docs/5.5) v5.5

[BLADE](https://laravel.com/docs/5.5/blade),

[BOOTSTRAP](https://getbootstrap.com/docs/3.3/getting-started/), v3.3.7

[CSS](https://www.w3schools.com/css/css3_intro.asp) v3,

![alt text](/Users/Cedric/Sites/GitClean/laravel_MusicBand/public/uploads/capture.png)
##
#Install

- npm install

## Demarrer le serveur DB mysql

- "mysql.server start" (mac) 
- "php -S localhost:'port' " (windows)

(les paramètres de la DB sont réglable dans  .env)


par default la DB est nommée musicband_db

## Importer les tables

pour générer les tables
- "php artisan migrate"

## Demarrer le serveur Laravel

- "php artisan serve"

## Utiliser le Backend

- Créer un utilisateur via la page register.
- Augmenter les droits directement dans phpmyadmin.
- Se connecter avec cet utilisateur (le menu backend est maintenant disponible).




