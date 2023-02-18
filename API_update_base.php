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

// parcourir les enregistrements
foreach ($data["records"] as $record) {
  // extraire les données de l'enregistrement
  $id = $record["fields"]["libelle"];
  $nom = $record["fields"]["nom"];
  $adresse = $record["fields"]["adresse"];
  $commune = $record["fields"]["commune"];
  $etat = $record["fields"]["etat"];
  $type = $record["fields"]["type"];
  $geo = $record["fields"]["geo"];
  $nbPlacesDispo = $record["fields"]["nbplacesdispo"];
  $nbVelosDispo = $record["fields"]["nbvelosdispo"];
  $etatConnexion = $record["fields"]["etatconnexion"];
  $localisation = $record["fields"]["localisation"];
  $datemiseajour = $record["fields"]["datemiseajour"];

  // insérer les données dans la table vlille_realtime
  $sql = "INSERT INTO vlille_realtime (ID, nom, adresse, commune, etat, type, geo, nbPlacesDispo, nbVelosDispo, etatConnexion, localisation, datemiseajour) VALUES ('$id', '$nom', '$adresse', '$commune', '$etat', '$type', '$geo', '$nbPlacesDispo', '$nbVelosDispo', '$etatConnexion', '$localisation', '$datemiseajour')";
  $conn->query($sql);
}

// fermer la connexion
$conn->close();
?>
