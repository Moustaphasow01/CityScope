<?php
// Fonction qui retourne les informations des stations de la commune de Lille
function getLilleInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=116&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LILLE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
    
    return $vlille_info;
  }
  
  // Fonction qui retourne les informations des stations de la commune de Mons en Baroeul
  function getMonsEnBaroeulInfo() {
      $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=6&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MONS%20EN%20BAROEUL";
      $json = file_get_contents($url);
      $data = json_decode($json, true);
      $vlille_info = array();
  
      foreach($data["records"] as $record) {
        $vlille_info[] = $record["fields"];
      }
      return $vlille_info;
  }
  
  // Fonction qui retourne les informations des stations de la commune de Villeneuve d'Ascq
  function getVilleneuveDAscqInfo() {
      $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=7&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=VILLENEUVE%20D'ASCQ";
      $json = file_get_contents($url);
      $data = json_decode($json, true);
      $vlille_info = array();
  
      foreach($data["records"] as $record) {
        $vlille_info[] = $record["fields"];
      }
      return $vlille_info;
  }
  
  // Fonction qui retourne les informations des stations de la commune de Lomme
  function getLommeInfo() {
      $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=9&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LOMME";
      $json = file_get_contents($url);
      $data = json_decode($json, true);
      $vlille_info = array();
  
      foreach($data["records"] as $record) {
        $vlille_info[] = $record["fields"];
      }
      return $vlille_info;
  }
  
  // Fonction qui retourne les informations des stations de la commune de Roubaix
function getRoubaixInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=40&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=ROUBAIX";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Marquette-lez-Lille
    function getMarquetteLezLilleInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MARQUETTE-LEZ-LILLE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Lille Hellemmes
    function getLilleHellemmesInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=20&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LILLE+HELLEMMES";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de La Madeleine
    function getLaMadeleineInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=20&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LA+MADELEINE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    // Fonction qui retourne les informations des stations de la commune de Saint Andre Lez Lille
function getSaintAndreLezLilleInfo() {
$url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=SAINT ANDRE LEZ LILLE";
$json = file_get_contents($url);
$data = json_decode($json, true);
$vlille_info = array();

foreach($data["records"] as $record) {
$vlille_info[] = $record["fields"];
}

return $vlille_info;
}

// Fonction qui retourne les informations des stations de la commune d'Hellemmes
function getHellemmesInfo() {
$url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=20&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=HELLEMMES";
$json = file_get_contents($url);
$data = json_decode($json, true);
$vlille_info = array();

foreach($data["records"] as $record) {
$vlille_info[] = $record["fields"];
}

return $vlille_info;
}

// Fonction qui retourne les informations des stations de la commune de Loos
function getLoosInfo() {
$url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LOOS";
$json = file_get_contents($url);
$data = json_decode($json, true);
$vlille_info = array();

foreach($data["records"] as $record) {
$vlille_info[] = $record["fields"];
}

return $vlille_info;
}

// Fonction qui retourne les informations des stations de la commune de Marcq en Baroeul
function getMarcqEnBaroeulInfo() {
$url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=20&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MARCQ EN BAROEUL";
$json = file_get_contents($url);
$data = json_decode($json, true);
$vlille_info = array();

foreach($data["records"] as $record) {
$vlille_info[] = $record["fields"];
}

return $vlille_info;
}
// Fonction qui retourne les informations des stations de la commune de Lambersart
function getLambersartInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LAMBERSART";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Saint-André-lez-Lille
    function getSaintAndreLezLilleInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=SAINT-ANDRÉ-LEZ-LILLE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Tourcoing
    function getTourcoingInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=50&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=TOURCOING";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Wasquehal
    function getWasquehalInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=WASQUEHAL";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    // Fonction qui retourne les informations des stations de la commune de Lambersart
function getLambersartInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LAMBERSART";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Saint-André-lez-Lille
    function getSaintAndreLezLilleInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=SAINT-ANDRÉ-LEZ-LILLE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Tourcoing
    function getTourcoingInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=50&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=TOURCOING";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Wasquehal
    function getWasquehalInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=WASQUEHAL";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    // Fonction qui retourne les informations des stations de la commune de Haubourdin
function getHaubourdinInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=5&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=HAUBOURDIN";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
  
    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
  
    return $vlille_info;
  }
 // Fonction qui retourne les informations des stations de la commune de Faches-Thumesnil
function getFachesThumesnilInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=5&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=FACHES-THUMESNIL";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
  
    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
  
    return $vlille_info;
  }
  // Fonction qui retourne les informations des stations de la commune de Ronchin
function getRonchinInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=5&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=RONCHIN";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
  
    foreach($data["records"] as $record) {
      $vlille_info[] = $record["fields"];
    }
  
    return $vlille_info;
  }
  // Fonction qui retourne les informations des stations de la commune de Croix
function getCroixInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=CROIX";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Wattrelos
    function getWattrelosInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=WATTRELOS";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Faches-Thumesnil
    function getFachesThumesnilInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=FACHES-THUMESNIL";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    
    // Fonction qui retourne les informations des stations de la commune de Marquette-lez-Lille
    function getMarquetteLezLilleInfo() {
    $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=MARQUETTE-LEZ-LILLE";
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $vlille_info = array();
    
    foreach($data["records"] as $record) {
    $vlille_info[] = $record["fields"];
    }
    return $vlille_info;
    }
    function getLezennesInfo() {
        $url = "https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=10&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion&refine.commune=LEZENNES";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $vlille_info = array();
      
        foreach($data["records"] as $record) {
          $vlille_info[] = $record["fields"];
        }
        return $vlille_info;
    }
      
  
?>
