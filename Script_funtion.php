<?php
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


?>