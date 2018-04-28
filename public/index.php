<?php
// J'inclus toutes les dépendances venant de Composer
require('../vendor/autoload.php');
use Mealoclock\Controllers\Application;
$foo = new Application();
$foo->run();
?>
