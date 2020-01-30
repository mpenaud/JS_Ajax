<?php 
header("Content-Type: text/plain");

$frappe = strtolower($_GET["frappe"]) . "%";

require_once('constantes.inc.php');
try { 
    $pdo = new PDO(DSN, UTILISATEUR, MDP);
} catch (PDOException $e)  {
    echo "La connection à la base de donnée a échoué";
    exit(1);
}
try {
    $requetePreparee = $pdo->prepare('select * from annuaire where lower(nom) like ?');
    $requetePreparee->bindParam(1, $frappe, PDO::PARAM_STR);
    $resultat = $requetePreparee->execute();
    if($resultat) {
        $lignes = $requetePreparee->fetchAll();
        for ($i = 0 ; $i < count($lignes) ; $i++) {
            echo "<option value=\"" . $lignes[$i]['nom'] . "\">";
        }
    } else { 
        echo "Echec";
    }
} catch (PDOException $e)  {
    echo "Probléme de selection";
    exit(1);
}

?>
