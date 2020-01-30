<?php 

// Définition des constantes 

// par conventions les constantes sont écrites en majuscules

// les constantes ne peuvent changer de valeur une fois qu'elles on été définies

define('SERVEUR', 'localhost'); // défine permet de définir des constantes
define('PORT', '5432');

define('UTILISATEUR', '<entrer le nom utilisateur ici>');
define('MDP', '<entrer votre mot de passe ici>');
define('NOM_BASE', '<entrer votre nom de base ici>');

define('DSN', 'pgsql:host=' . SERVEUR . ' port=' . PORT . ' dbname=' . NOM_BASE); // DSN --> Data Source Name

?>
