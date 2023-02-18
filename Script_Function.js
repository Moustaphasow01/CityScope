function afficherCommunes() {
    // faire appel à l'API
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=289&facet=commune', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        // vérifier que la requête a été effectuée avec succès
        if (xhr.status === 200) {
          // transformer la réponse en objet JSON
          var response = JSON.parse(xhr.responseText);
          // récupérer les communes sous forme de tableau
          var communes = response.facet_groups[0].facets;
          // créer la liste HTML
          var select = '<select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">';
          select += '<option selected>Commune</option>';
          for (var i = 0; i < communes.length; i++) {
            select += '<option value="' + communes[i].name + '">' + communes[i].name + '</option>';
          }
          select += '</select>';
          // afficher la liste dans la page
          document.getElementById('liste-communes').innerHTML = select;
        } else {
          console.log('Erreur');
        }
      }
    };
    xhr.send();
  }
  