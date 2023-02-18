<?php
// se connecter à la base de données
$servername = "localhost";
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
    print_r($data);


// renvoyer les données au format JSON
header('Content-Type: application/json');
echo json_encode($data);

// fermer la connexion
$conn->close();
?>
