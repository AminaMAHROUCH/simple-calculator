# simple-calculator

## Description

Ce projet Laravel implémente une application pour une calculatrice simple.

## Fonctionnalités

- Calculs en fonction des entrées utilisateur (addition, soustraction, multiplication, division).
- Tests unitaires et tests fonctionnels pour garantir le bon fonctionnement de l'application.

## Installation

### 1. Cloner le projet

Clonez ce repository dans votre répertoire local en utilisant Git.

```bash
git clone https://github.com/AminaMAHROUCH/simple-calculator.git
```
### 2. Installer les dépendances

Installez les dépendances via Composer.

```bash
cd simple-calculator
composer install
```

### 3. Configuration de l'environnement

Copiez le fichier `.env.example` et renommez-le en `.env`.

```bash
cp .env.example .env
```
### 4. Générer la clé d'application

Générez une nouvelle clé d'application avec la commande Artisan.

```bash
php artisan key:generate
```
### 5. Lancer le serveur de développement
Vous pouvez maintenant démarrer le serveur de développement Laravel.

```bash
php artisan serve
```
Vous pouvez y accéder via : http://localhost:8000/

### 6. Exécuter les tests unitaires
   Pour exécuter à la fois les tests unitaires et les tests fonctionnels, utilisez la commande suivante :

   ```bash
   php artisan test
   ```
