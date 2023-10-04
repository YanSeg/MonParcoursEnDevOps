
# Projet Laravel de Gestion de Produits

Ce projet Laravel est une application simple de gestion de produits qui vous permet de créer, afficher, mettre à jour et supprimer des produits. Il utilise Laravel Breeze pour l'authentification des utilisateurs et vous permet de créer un utilisateur "root" si vous êtes le seul à avoir accès à la base de données.

#Fonctionnalités
Création, lecture, mise à jour et suppression de produits. (à vous d'ajouer les images dans le dossier public. L'importation des images via l'application n'a pas été terminé, par soucis de temps, il n'en reste que cela n'est pas compliqué. Vous pouvez contribuer)
Authentification des utilisateurs avec Laravel Breeze.


# Avant de commencer, assurez-vous d'avoir les éléments suivants installés :

PHP >= 7.3
Composer (pour l'installation des dépendances Laravel)
MySQL ou un autre système de gestion de base de données (vous pouvez également utiliser SQLite pour des tests locaux)

# Installation
Accédez au répertoire du projet :
cd projet-laravel-gestion-produits
Installez les dépendances Laravel en utilisant Composer :
composer install
Créez un fichier .env en copiant le fichier .env.example :
cp .env.example .env
Générez une clé d'application Laravel :
php artisan key:generate

Configurez votre base de données dans le fichier .env. Par défaut, le projet est configuré pour utiliser MySQL, mais vous pouvez utiliser un autre système de gestion de base de données si vous le souhaitez.

Exécutez les migrations pour créer les tables de base de données :
php artisan migrate
(Optionnel) Si vous êtes le seul à avoir accès à la base de données et que vous souhaitez créer un utilisateur "root", en modifiant le nécessaire directement dans la bdd, cf code.

Utilisation
Lancez le serveur de développement Laravel :
php artisan serve
Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.

Connectez-vous en utilisant les fonctionnalités d'authentification de Laravel Breeze.

Créez, affichez, mettez à jour et supprimez des produits à partir de l'interface utilisateur.

Contribuer
Si vous souhaitez contribuer à ce projet, il reste à ajouer upload image, cacher les possibilités de CRUD pour les utilisateurs non identifier comme admin.  

Licence
Ce projet est sous licence MIT

Remerciement 
Campus In the Alps / Alexandre de Pembroke.
