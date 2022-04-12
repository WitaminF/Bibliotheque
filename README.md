# Bibliotheque

## Objectif:

Développer un logiciel WEB pour une bibliotheque
Réalisé par Florent Scheibler pour le cours 120 - implémenter des interfaces utilisateurs

Documents de rendu final:

- Le code du projet, se trouve dans le dossier Bibliotheque de ce dépot GIT.
- Le dossier export.sql pour la base de données n'est pas nécessaire car j'ai utilisé les factories et seeders intégrés à Laravel
- Les maquettes initiales: https://www.figma.com/file/mHDh5slseSS9EbzdfsDVSp/Untitled?node-id=0%3A1
- Le shéma MLD se trouve dans le dossier database à la racine de ce dépot GIT en format xls.
- Le guide d'utilisateur se trouve à la suite des informations de démarrage du projet.

# Démarrage

Cloner le dépot git:

````
git clone https://github.com/WitaminF/Bibliotheque
````

Changer de répertoire pour aller dans MaBibliotheque

````
cd .\Bibliotheque\MaBibliotheque
````

Installer les dépendances

````
composer install
````

Copie du fichier .env
````
cp .env.example .env
````

Générer la clé env

````
php artisan key:generate
````

Après modification du ficher .env pour vous connecter à votre base avec username/password 
et après avoir renseigner le nom de la base de données que vous avez créé auparavant


Fresh migration avec les seeds
````
php artisan migrate:fresh --seed
````

Vous pouvez ensuite lancer votre programme

````
php artisan serve
````

# Guide Utilisateur:

Guide destiné aux utilisateurs de ce programme

## DashBoard
Vous permet d'accèder en un coup d'oeil aux nombre d'entrées dans notre base de donnée.

## Auteurs, éditeurs et catégories:
Pour créer une catégorie, un auteur ou un éditeur, le principe est similaire, rendez vous dans l'onglet
correspondant puis, cliquez sur ajouter
Une fois l'entrée créé vous accèder à la liste complète, pour modifier une entrée cliquez sur edit

## Livres
Pour créer un livre, rendez vous dans l'onglet correspondant et cliquez sur ajouter livre, une fois l'opération
terminée, confirmez l'ajout d'un nouveau livre

## Clients
Dans l'onglet client, cliquez sur ajouter un client, une fois les champs renseignés, confirmé l'ajout
d'un nouveau client.

## Emprunts
Vous pouvez maintenant ajouter un emprunt, dans l'onglet emprunt, ajouter un nouvel emprunt, renseigné les champs
Client + livre et confirmez
Pour mettre fin à un emprunt, allez sur l'emprunt désirés puis sélectionner retour, dans la page suivante
confirmez le retour de l'emprunt.

## Paramètres
Vous permet de modifier différents paramètres:
- Nombre de jour d'emprunt max
- Nombre d'emprunt max par client



