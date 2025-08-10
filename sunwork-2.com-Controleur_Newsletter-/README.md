# thesunwork Project

Bienvenue sur le site web du projet thesunwork. Ce projet est développé avec Laravel et utilise une base de données MySQL.

## Prérequis

Assurez-vous d'avoir les éléments suivants installés :

- PHP >= 8.1
- Composer
- MySQL
- Laravel CLI (facultatif)

## Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/DePaul17/sunwork.com.git
cd votre-dossier-projet
#Installation des dépendances
composer install

#Génération de la clé de l'application
php artisan key:generate

#Configuration de la base de données
cp .env.example .env

#Modifier les informations de connexion à la base de données dans le fichier .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889(mac) ou 3306(windows)
DB_DATABASE=sunwork_db
DB_USERNAME="root"
DB_PASSWORD="root"(mac) ou ""(windows)

#Migration de la base de données
php artisan migrate

#Lancement du projet 
php artisan serve

Bien joué !