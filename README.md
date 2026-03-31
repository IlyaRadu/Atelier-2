# MediaTekDocuments — API PHP (BTS)

## Description

Ce projet correspond à l’atelier 2.
Le but est de mettre en place une API en PHP pour accéder aux données d’une médiathèque (livres, DVD, revues).

L’API permet surtout de faire des requêtes simples pour récupérer les données depuis une base MySQL.

## Technologies utilisées

* PHP
* MySQL
* API REST
* Postman

## Lancement du projet

1. Dézipper le projet
2. Créer la base de données `mediatek86`
3. Importer le fichier `mediatek86.sql`
4. Lancer le serveur PHP

Exemple :

```bash
mysql -u root -e "CREATE DATABASE mediatek86;"
mysql -u root mediatek86 < mediatek86.sql
php -S localhost:8000 -t .
```

## Exemples de requêtes

* Livres : http://localhost:8000/index.php?table=livre
* DVD : http://localhost:8000/index.php?table=dvd
* Revues : http://localhost:8000/index.php?table=revue

## Structure

* index.php : point d’entrée de l’API
* Controle.php : gestion des requêtes
* MyAccessBDD.php : accès à la base de données

## Travail réalisé

* mise en place et test de l’API
* tests avec Postman
* ajout de logs (logs.txt)
* sécurisation basique avec authentification

## Remarque

Le projet a été réalisé sur macOS sans Visual Studio.
La partie C# desktop n’a donc pas été développée complètement.
