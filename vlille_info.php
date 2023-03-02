<?php
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

// Fonction qui retourne les informations des stations de la commune de Roubaix
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
// Fonction qui retourne les informations des stations de la commune de Tourcoing
function getVTourcoingInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=25&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=TOURCOING";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de VILLENEUVE 
function getVVilleneuveInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=24&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=VILLENEUVE+D%27ASCQ";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de MONS EN BAROEUL 
function getVMONS_EN_BAROEUL() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=12&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MONS+EN+BAROEUL";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de la madeleine 
function getVLaMadelaine() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=11&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LA+MADELEINE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de LAMBERSART 
function getVLAMBERSART() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=9&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LAMBERSART";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de LILLE HELLEMMES
function getVLILLEHELLEMMES() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=6&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LILLE+HELLEMMES";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de LOOS
function getVLOOS() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=6&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LOOS";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();

    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de AINT ANDRE LEZ LILLE
function getVSAINT_ANDRE_LEZ_LILLE() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=5&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=SAINT+ANDRE+LEZ+LILLE";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de CROIX
function getVCROIX() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=4&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=CROIX";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de MARCQ_EN_BAROEUL
function getVMARCQ_EN_BAROEUL() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=4&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MARCQ+EN+BAROEUL";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de HEM
function getVHEM() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=3&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=HEM";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de LOMME
function getVLOMME() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=3&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LOMME";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de MARQUETTE
function getVMARQUETTE() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=3&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MARQUETTE";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de RONCHIN
function getVRONCHIN() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=3&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=RONCHIN";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de WATTRELOS
function getVWATTRELOS() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=3&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=WATTRELOS";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de FACHES THUMESNIL
function getVFACHES_THUMESNIL() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=2&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=FACHES+THUMESNIL
  ";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de HAUBOURDIN
function getVHAUBOURDIN() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=2&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=HAUBOURDIN";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}
// Fonction qui retourne les informations des stations Favoris
function getVFAVORIS() {
  $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=PONT+SUPERIEUR&rows=0&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion";
  $json = file_get_contents($url);
  $data = json_decode($json, true);
  $vlille_info = array();

  foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
  }
  return $vlille_info;
}




?>
