

## 1 créer un projet type avec les répertoires par défaut
app-> /Controllers /Models /Views
Public-> /assets-> /css /js /image

## 2 Créer le MainController
Dans le répertoire `app/Controllers` créer un fichier Application.php (ou autre nom)

## 3 Editer un Controller
#### Le spacename
Avant toute chose nommer un spacename pour ce controller :
`namespace Mealoclock\Controllers`;

Cependant il faut installer composer pour qu'il soit reconnu ?

#### Une class
1 Dans le fichier Application.php créer un classe qui porte le MEME nom que le fichier en question (ex: si FrontController.php alors `class FrontController{}`; si Application.php alors `class Application{}`).

Ici on aura `class Application {}`

### Une méthode
dans la classe on peut ajouter des méthodes.

Ex : `public function run(){}`
## 4 Composer
Dans un terminal sur le dossier racine du projet :
`composer init`

Ajouter au fichier composer.json à la racine selon le namespace et le chemin voulu :

    "autoload": {
      "psr-4": {
        "Mealoclock\\": "app/"  
      }
    }

Dans le terminal : `composer install`


Note : à chaque changement ajout de namesapce :  
 `composer dump-autoload` 		

## 5 Fichier index.php
L'index.php devrait être dans le rep public du projet
### Inclure le fichier autoload de composer :
`require('vendor/autoload.php');`

### indiquer le spacename
pour la class Application :   
`use Mealoclock\Controllers\Application;`
### instancier la class et appeler la fonction
`$foo = new Application();`  
`$foo->run();`
