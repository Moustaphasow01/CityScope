<?php
//en te basant sur ce code, tu peux faire une fonction qui retourne les infos de toutes les stations des ville suivante : LILLE, MONS EN BAROEUL, VILLENEUVE D'ASCQ, LOMME, SAINT ANDRE LEZ LILLE, ROUBAIX, MARQUETTE, LILLE HELLEMMES, LA MADELEINE, HELLEMMES, LOOS, MARCQ EN BAROEUL, LAMBERSART, SAINT-ANDRÉ-LEZ-LILLE, TOURCOING, WASQUEHAL, HEM, HAUBOURDIN, FACHES THUMESNIL, RONCHIN, CROIX, WATTRELOS, FACHES-THUMESNIL, MARQUETTE-LEZ-LILLE, LEZENNES
// Fonction qui retourne les informations des stations de la commune de lille
function getVLilleInfo() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=116&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LILLE";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();
  
  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  
  return $vlille_info;
}

// Fonction qui retourne les informations des stations de la commune de lille
function getVRoubaixInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=40&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=ROUBAIX";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
?>
