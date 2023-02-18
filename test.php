<?php
require_once 'Script_funtion.php';

// test de la fonction getVlilleById
$id = '30';
$vlille = getStationById($id);
echo "Informations pour l'id $id : \n";
print_r($vlille);

?>
