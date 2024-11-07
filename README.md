# 🍲 Yummy Recipes

Une application de partage de recettes en ligne, développée avec Symfony, permettant aux utilisateurs de s'inscrire, de se connecter et de partager leurs recettes favorites. Ce projet met l'accent sur une interface utilisateur intuitive et un design élégant, grâce à l'intégration de Bootstrap.


## Sommaire

- [Présentation du Projet](#présentattion-du-projet)
- [Technologies Utilisées](#technologies-utilisées)
- [Installation et Configuration](#installation-et-configuration)
- [Fonctionnalités](#fonctionnalités)
- [ToDo](#todo)
- [Contribution](#contribution)
- [Licence](#licence)


## Présentation du Projet

**Yummy Recipes** est une application web conçue pour les passionnés de cuisine qui souhaitent partager leurs meilleures recettes. L'application permet aux utilisateurs de créer un compte, de se connecter et de publier leurs recettes, accompagnées d'images et d'instructions détaillées. Les utilisateurs peuvent également parcourir les recettes des autres membres, offrant ainsi une source d'inspiration culinaire en ligne.


## Technologies Utilisées

- **PHP 8.1** et **Symfony**
- **Bootstrap** pour le design et la mise en forme des pages
- **MySQL** comme base de données
- **Composer** pour la gestion des dépendances
- **Symfony CLI** pour le lancement et la gestion de l'application


## Installations et Configuration

### Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :
- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL

### Étapes d'installation

1. **Cloner le dépot :**

```bash
git clone https://github.com/your_project/yummy-recipes.git
cd yummy-recipes
```

2. Installer les dépendances

```bash
composer install
```

3. Configuration de l'environnement local :

Créer un fichier **.env.local** à la racine du projet pour stocker les configurations locales (comme les identifiants de base de données)
```makefile
DATABASE_URL="mysql://username:password@127.0.0.1:3306/database_name"
```

Exécuter la commande pour créer la base de données :
```bash
symfony console doctrine:databse:create
```

4. Lancer l'application en local :

```bash
symfony serve
```


## Fonctionnalités


## ToDo

- [X] Ajouter un système d'enregistrement d'utilisateurs
- [] Intégrer un système de validation d'e-mail lors de l'inscription
- [] Ajouter une réinitialisation de mot de passe
- [X] Ajouter l'avatar de l'utilisateur connecté dans la barre de navigation et mise en place d'un avatar par défaut
- [] Mettre en place la gestion des accès et la sécurisation des routes
- [] Ajouter un système de recherche par mot-clés pour les recettes
- [] Implémenter un système de commentaires pour les recettes
- [] Ajouter la possibilité pour les utilisateurs de noter les recettes
- [] Permettre aux utilisateurs de charger des images pour illustrer leurs recettes
- [] Optimiser les performances et l'accessibilité de l'application


## Licence
