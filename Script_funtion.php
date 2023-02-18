<?php
/**
Récupère les informations d'une station par son ID

@param int $id ID de la station

@return array|null Tableau contenant les informations de la station ou null si aucune station trouvée
*/
function getStationById($id) {
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

    // requête SQL pour récupérer les informations de la station
    $sql = "SELECT nom, adresse, commune, etat, type, nbPlacesDispo, nbVelosDispo, etatConnexion, datemiseajour FROM vlille_realtime WHERE ID='$id'";

    // exécuter la requête SQL
    $result = $conn->query($sql);

    // récupérer les données de la station
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = array(
            "nom" => $row["nom"],
            "adresse" => $row["adresse"],
            "commune" => $row["commune"],
            "etat" => $row["etat"],
            "type" => $row["type"],
            "nbPlacesDispo" => $row["nbPlacesDispo"],
            "nbVelosDispo" => $row["nbVelosDispo"],
            "etatConnexion" => $row["etatConnexion"],
            "datemiseajour" => $row["datemiseajour"]
        );
    } else {
        $data = null;
    }

    // fermer la connexion
    $conn->close();

    // retourner les données de la station
    return $data;
}

/**

Récupère les informations des stations d'une commune donnée

@param string $commune Nom de la commune

@return array|string Tableau contenant les informations des stations ou une chaîne vide si aucune station trouvée
*/
function getInfosByCommune($commune) {
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

    // requête SQL pour récupérer les informations correspondantes à la commune
    $sql = "SELECT ID, nom, adresse, commune, etat, type, nbPlacesDispo, nbVelosDispo, etatConnexion, datemiseajour FROM vlille_realtime WHERE commune='$commune'";
    $result = $conn->query($sql);

    // vérifier si la requête a retourné des résultats
    if ($result->num_rows > 0) {
        // parcourir les enregistrements et stocker les informations dans un tableau
        $infos = array();
        while ($row = $result->fetch_assoc()) {
            $infos[] = array(
                "ID" => $row["ID"],
                "nom" => $row["nom"],
                "adresse" => $row["adresse"],
                "commune" => $row["commune"],
                "etat" => $row["etat"],
                "type" => $row["type"],
                "nbPlacesDispo" => $row["nbPlacesDispo"],
                "nbVelosDispo" => $row["nbVelosDispo"],
                "etatConnexion" => $row["etatConnexion"],
                "datemiseajour" => $row["datemiseajour"]
            );
        }
        // fermer la connexion et retourner le tableau d'informations
        $conn->close();
        return $infos;
    } else {
        // fermer la connexion et retourner une chaîne vide si aucun résultat trouvé
        $conn->close();
        return "";
    }
}

/**

Récupère les informations des stations où il y a des vélos disponibles
@return array Un tableau associatif contenant les informations suivantes pour chaque station : ID, nom, adresse, commune, état, type, nombre de places disponibles, nombre de vélos disponibles, état de la connexion, date de mise à jour
*/

function getInfoWithBikesAvailable() {
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

  // récupérer les données de la table vlille_realtime
  $sql = "SELECT ID, nom, adresse, commune, etat, type, nbPlacesDispo, nbVelosDispo, etatConnexion, datemiseajour FROM vlille_realtime WHERE nbVelosDispo > 0";
  $result = $conn->query($sql);

  // stocker les données dans un tableau associatif
  $infoArray = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $infoArray[] = $row;
    }
  }

  // fermer la connexion
  $conn->close();

  // retourner le tableau associatif
  return $infoArray;
}


?>