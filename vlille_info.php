<?php
function getVLilleInfo() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();
  
  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  
  return $vlille_info;
}
?>