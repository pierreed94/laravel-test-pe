<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Test LARAVEL Pierre-Edouard

## Présentation du projet

Création d'un site web présentant la marque de chaussure CKC sport.

Sur cette plateforme nous retrouvons :
 -   une partie front-office avec les pages suivantes
        -   page d'accueil
        -   page catalogue produit avec un tri prix croissant
        -   page de détails du produit où l'on peut découvrir le projet et l'ajouter au panier
        -   page d'un tableaux des prix des produits avec un tri modifiable en AJAX (par défaut prix croissant)
        -   page panier gérer en AJAX (ajout, modification quantité, suppression)
        -   page login
        -   page contact (envoi de formulaire à l'adresse pierreedouard.tessier@gmail.com) (utilisation d'une clé d'application google), avec enregistrement des données du formulaire en base de données
        -   page d'inscription (par défaut l'utilisateur obtient le role 'user' à la création du compte)
 - une partie back-office
        - accessible uniquement via le role 'admin' avec possibilité de CRUD les produits

        - utilisateur ayant le role admin

          - "john@doe.fr" => "soleil513"





## Environnement de travail

- macOS
- PHP 8.2.7
- Mysql Server version: 11.0.2-MariaDB Homebrew
- npm v9.5.1
- composer v2.5.8
- LARAVEL v10


## Technologies utilisées

- LARAVEL 10
- BOOTSRAP v5.3.0
- HTMl
- CSS/SCSS
- Jquery
- Vite


## Procédure d'installation
- Une fois le projet récupérer via le lien git :
- Récupérer le fichier de la base de données nommée "`bdd.sql`"
- Depuis `phpMyAdmin ou MysqlWorkbench` par exemple, créer une nouvelle base de données
- Importer le fichier "`bdd.sql`" dans la base de données créée
- Modifier les paramètres du .env selon votre configuration (`DB_DATABASE=, DB_USERNAME= ,DB_PASSWORD=`)
- Exécuter la commande "`composer install`"
- Exécuter la commande "`npm install`"
- Build les assets via la commande "`npm run dev`" ou "`npm run dev --watch`" pour surveiller les changements
- Exécuter le serveur : `php artisan serve`

(NB : les produits créés via faker ont des noms de personnes, pour vider la table sans vider la table user utilser par exemple la commande mysql : `TRUNCATE TABLE products`;
)

``


``




