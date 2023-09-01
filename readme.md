[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<div align="center">
  <a href="https://laurezammit.github.io/Booki-php/">
    <img src="/booki/img/Booki.png" alt="Logo Booki" width="180">
  </a>
</div>

<p align="center">
    <br>
    <a href="https://github.com/LaureZammit/Booki-php">Voir les documents</a>
    &nbsp;
    ·
    &nbsp;
    <a href="https://github.com/LaureZammit/Booki-php/issues">Rapporter une erreur</a>
</p>

# LES OBJECTIFS DU PROJET - BOOKI en PHP

## Détail du projet

### Module de connexion

#### Description

Créez un module de connexion simple qui permet aux utilisateurs de se connecter avec un nom d'utilisateur et un mot de passe. Si les informations sont correctes, l'utilisateur est redirigé vers une page de bienvenue. Sinon, un message d'erreur est affiché. Sur la page bienvenue, il faut ajouter un bouton de déconnexion.

#### Pages du projet

* index.php : Page de connexion où les utilisateurs saisissent leurs informations.
* bienvenue.php : Page de bienvenue affichée après une connexion réussie. Si l’utilisateur n’est pas connecter, il ne doit pas avoir accès à cette page.
* styles.css : Fichier CSS pour la mise en forme.

#### Objectifs

[x] Créer un formulaire de connexion avec des champs pour le nom d'utilisateur et le mot de passe.

[x] Valider les informations soumises par l'utilisateur.

[x] Utiliser un tableau associatif pour stocker les informations de connexion (simulées ici).

[x] Rediriger l'utilisateur vers la page de bienvenue en cas de succès.

[x] la connexion doit être stocké dans une session ou un cookie

[x] La page bienvenue n’est pas accessible si l’utilisateur n’est pas connecté.

[x] Afficher un message d'erreur en cas d'échec.

[x] Ajouter un bouton de déconnexion sur la page de bienvenue.

### Refactoriser Booki

Dans ce projet, la base vous est fournie, à savoir :
- La page d’accueil
- La page de détail pour les hébergements
- La page de détail pour les populaires
- La page de détail pour les activités

Le style est déjà créé et n’est donc pas à refaire.

Votre mission est de faire en sorte de :
[x] Créer un header a afficher sur les différentes pages

[x] Créer un footer à afficher sur les différentes pages

[x] Créer un tableau pour les hébergements à Marseille

[x] Créer un tableau pour les activités a Marseille

[x] Créer un tableau pour les plus populaires

[x] En utilisant PHP, vous devrez appeler le header et le footer sur les différentes pages. Vous utiliserez PHP pour appeler les activités, les hébergements et les plus populaires sur la page d’accueil.

[x] Avec PHP, vous allez appeler les différentes informations sur les pages de détails de chacune des vignettes. Attention, vous ne devez pas dupliquer les pages de détails pour chaque vignette.

## Construction
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" height="30" alt="vscode logo"  />
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="30" alt="php logo"  />

## Auteure
Laure Zammit

## Contact
Laure Zammit - laurezammit@gmail.com

Project Link: [https://github.com/LaureZammit/Booki-php.git](https://github.com/LaureZammit/Booki-php.git)

## Remerciements

* [PurpleBooth](https://github.com/PurpleBooth/a-good-readme-template) : modèle de Readme très complet
* [Othneildrew](https://github.com/othneildrew/Best-README-Template/blob/master/README.md) - Readme Template

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/LaureZammit/Booki-php.svg?style=for-the-badge
[contributors-url]: https://github.com/LaureZammit/Booki-php/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/LaureZammit/Booki-php.svg?style=for-the-badge
[forks-url]: https://github.com/LaureZammit/Booki-php/forks
[stars-shield]: https://img.shields.io/github/stars/LaureZammit/Booki-php.svg?style=for-the-badge
[stars-url]: https://github.com/LaureZammit/Booki-php/stargazers
[issues-shield]: https://img.shields.io/github/issues/LaureZammit/Booki-php.svg?style=for-the-badge
[issues-url]: https://github.com/LaureZammit/Booki-php/issues

[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/laure-zammit-84a3b3150/
