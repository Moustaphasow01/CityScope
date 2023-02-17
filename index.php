<?php
<?php
$username = 'root'; // nom d'utilisateur pour se connecter à la base de données
$password = ''; // mot de passe pour se connecter à la base de données

try {
    $db = new PDO("mysql:host=localhost;dbname=cityscope_db", $username, $password); // connexion à la base de données en utilisant PDO
    $data = array(); // initialisation d'un tableau pour stocker les données récupérées

    foreach($db->query('SELECT * FROM vlille_realtime') as $row) { // récupération des données de la table "vlille_realtime"
        $data[] = $row; // ajout de chaque ligne au tableau $data
    }

    echo json_encode($data); // conversion du tableau $data en une chaîne JSON et affichage du résultat

} catch (PDOException $e) { // en cas d'erreur de connexion, affichage d'un message d'erreur et arrêt du script
    print "Error: " . $e->getMessage() . "<br />";
    die;
}
?>

?>
