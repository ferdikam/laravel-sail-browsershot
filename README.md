## Mon Application Laravel avec Export PDF

Ce projet est une application Laravel Sail qui utilise la bibliothèque Spatie/Browsershot pour générer des fichiers PDF à partir de pages web.


## Prérequis

Assurez-vous d'avoir Docker et Docker Compose installés sur votre machine avant de commencer.


## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/mon-application-laravel.git
2. Accédez au répertoire du projet :
    ```bash
    cd mon-application-laravel
3. Copiez le fichier .env.example et renommez-le en .env :
    ```bash
    cp .env.example.com .env
4. Configurez les variables d'environnement dans le fichier .env selon vos besoins.
5. Installez les dépendances du projet avec Composer :
    ```bash
    composer install
6. Lancez les conteneurs Docker avec Laravel Sail :
    ```bash
    ./vendor/bin/sail up -d
7. Exécutez les migrations et les seeders pour préparer la base de données :
    ```bash
    ./vendor/bin/sail artisan migrate --seed

## Utilisation
1. Accédez à l'application dans votre navigateur à l'adresse [http://localhost](http://localhost/).
2. Utilisez l'interface pour générer des fichiers PDF à partir de pages web.

## Développement
Si vous souhaitez contribuer au développement de ce projet, suivez ces étapes :
1. Créez une nouvelle branche pour votre fonctionnalité ou correction :
    ```bash
    git checkout -b ma-nouvelle-fonctionnalite
2. Effectuez vos modifications et assurez-vous de les tester.
3. Soumettez une demande d'extraction (pull request) avec une description détaillée de vos modifications.

## Remerciements
Ce projet utilise la bibliothèque [Spatie/Browsershot](https://spatie.be/docs/browsershot/v4/introduction) pour la génération des fichiers PDF.

## Licence
Ce projet est sous licence [MIT license](https://opensource.org/licenses/MIT).
