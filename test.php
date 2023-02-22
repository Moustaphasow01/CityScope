<?php
/**

Script pour tester les fonctions du fichier Script_function.php
*/
require_once 'Script_funtion.php';
//----------------------------------------------------------------
/**
// Test de la fonction getVlilleById
$id = '30';
$vlille = getStationById($id);
echo "Informations pour l'id $id : \n";
print_r($vlille);

//----------------------------------------------------------------

// Test de la fonction getInfoWithBikesAvailable
$infos = getInfoWithBikesAvailable();
echo "Les station avec des vélos disponibles : \n";
print_r($infos);
//----------------------------------------------------------------
// Test de la fonction get_vlille_info
$infos = get_vlille_info();
echo "tations avec un nombre de places disponibles supérieur à 0 : \n";
print_r($infos);
//----------------------------------------------------------------
*/

//----------------------------------------------------------------

// Test de la fonction getInfosByCommune
$commune = "Lille";
$infos = getInfosByCommune($commune);
echo "Informations pour la commune de $commune : \n";
print_r ($infos);
//cho json_encode($infos);
//getInfosByCommune($commune);
//echo getCommunes();

?>
