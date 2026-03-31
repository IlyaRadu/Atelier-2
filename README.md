# MediaTekDocuments — API PHP (BTS)

## 1) Description du projet
Ce projet est une API REST en PHP pour gérer une médiathèque. On peut lire les livres, DVD et revues dans une base MySQL.

## 2) Technologies
- PHP
- MySQL
- REST API
- Postman

## 3) Lancer le projet en local (simple)
1. Dézipper le projet.
2. Importer la base `mediatek86.sql`.
3. Lancer le serveur PHP sur `localhost:8000`.

Exemple de commandes :

```bash
mysql -u root -e "CREATE DATABASE mediatek86;"
mysql -u root mediatek86 < mediatek86.sql
php -S localhost:8000 -t src
```

## 4) Exemples de requêtes (GET)
- Livres : `http://localhost:8000/index.php?table=livre`
- DVD : `http://localhost:8000/index.php?table=dvd`
- Revues : `http://localhost:8000/index.php?table=revue`

## 5) Structure du projet
- `index.php` : point d’entrée, lit les paramètres et appelle le contrôleur.
- `Controle.php` : vérifie la demande, envoie la réponse JSON.
- `MyAccessBDD.php` : contient les requêtes SQL.

## 6) Ce qui a été réalisé
- Tests manuels avec Postman
- Log simple dans `logs.txt`
- Sécurité basique (Basic Auth via `.env`)

## 7) Note importante
Projet fait sur macOS sans Visual Studio, donc la partie desktop C# n’est pas complète.
