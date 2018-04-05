# LaFrite
Voici le projet d'une équipe innovante et aux multiples qualités

Pour débuter vous devez Installer PHP, apache, MySQL et composer. Attention à vérifier que PHP 7.2 soit installé.

Téléchargez le dossier laFrite - git clone
Installer composer : 
- Sur mac : $ curl -sS https://getcomposer.org/installer | php
- Sur windows : se rendre sur https://getcomposer.org/download/ et télécharger composer

Exécutez la commande à l'intérieur du dossier depuis votre terminal : composer install

Dans .env modifié la Database DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

Varie selon votre type de machine ( windows - mac )
Démarrer SQL Effectuez les commandes suivantes :

php bin/console doctrine:database:create . Création de la base de donnée

php bin/console doctrine:database:update —force . Mise à jour de la base de donnée

php bin/console doctrine:fixtures:load . Création des fixtures dans la base

Pour se connecter en tant qu'admin rajoutez /admin dans l'url puis connectez vous

username : admin password : admin


Faite dans votre terminal $ php bin/console server:start pour lancer les serveurs.

Et débutez votre jeu de dettes
