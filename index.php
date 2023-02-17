<?php
// se connecter à la base de données
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityscope_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// exécuter la requête pour récupérer les données de la table vlille_realtime
$sql = "SELECT * FROM vlille_realtime";
$result = $conn->query($sql);

// récupérer les données dans un tableau associatif
$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// renvoyer les données au format JSON
header('Content-Type: application/json');
echo json_encode($data);

// fermer la connexion
$conn->close();
*/
$username = 'root'; // Définition du nom d'utilisateur pour se connecter à la base de données
$password = ''; // Définition du mot de passe pour se connecter à la base de données
try {
  // Tentative de connexion à la base de données en utilisant PDO
  $db = new PDO("mysql:host=localhost;dbname=cityscope_db", $username, $password);
  // Récupération des données de la table "vlille_realtime"
  foreach ($db->query('SELECT * FROM vlille_realtime') as $row) {
    // Affichage des données récupérées
    print_r($row);
  }
} catch (PDOException $e) {
  // En cas d'erreur de connexion, affichage d'un message d'erreur et arrêt du script
  print "Error: " . $e->getMessage() . "<br />";
  die;
}
?>
