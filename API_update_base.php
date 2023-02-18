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

// récupérer les données de l'API
$url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion";
$data = json_decode(file_get_contents($url), true);
print_r($data);



// parcourir les enregistrements
foreach ($data["records"] as $record) {
  // extraire les données de l'enregistrement
  $id = (string) $record["fields"]["libelle"];
  $nom = (string) $record["fields"]["nom"];
  $adresse = (string) $record["fields"]["adresse"];
  $commune = (string) $record["fields"]["commune"];
  $etat = (string) $record["fields"]["etat"];
  $type = (string) $record["fields"]["type"];
  $nbPlacesDispo = (string) $record["fields"]["nbplacesdispo"];
  $nbVelosDispo = (string) $record["fields"]["nbvelosdispo"];
  $etatConnexion = (string) $record["fields"]["etatconnexion"];
  $datemiseajour = (string) $record["fields"]["datemiseajour"];

  // insérer les données dans la table vlille_realtime
  $sql = "INSERT INTO vlille_realtime (ID, nom, adresse, commune, etat, type, nbPlacesDispo, nbVelosDispo, etatConnexion, datemiseajour) VALUES ('$id', '$nom', '$adresse', '$commune', '$etat', '$type', '$nbPlacesDispo', '$nbVelosDispo', '$etatConnexion', '$datemiseajour')";
  $conn->query($sql);
}

// fermer la connexion
$conn->close();
?>
