
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Page pour information des stations de lille " content="">
    <meta name="Moustapha yaya sow " content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Stations Lille</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <!-- CSS pour le tableau -->
    <style>
          table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-align: left;
          }
          th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
          }
          th {
            background-color: #4CAF50;
            color: white;
          }
          tr:hover {
            background-color: #f5f5f5;
          }
	</style>
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html">Acceuil</a></li>
              <li><a href="category.html">Stations</a></li>
              <li><a href="listing.html" class="active">Favoris</a></li>
              <li><a href="contact.html">Contactez nous</a></li> 
              <li><div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>--- </h6>
            <h2>Stations de Lille</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                   <!-- Partie pour charger le menu de toute les stations de lille -->
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/search-icon-01.png" alt=""></span>
                        Lille
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        ROUBAIX
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        VILLENEUVE D'ASCQ
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        LOMME
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        Food &amp; Life
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-02.png" alt=""></span>
                        Food &amp; Life
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-03.png" alt=""></span>
                        Cars
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/search-icon-04.png" alt=""></span>
                        Traveling
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-9">
                  <ul class="nacc">
                <!-- Tableau des stations de lille  -->
                    <li class="active">
                      <div>
                      <body>
                            
                            <?php
                              include 'vlille_info.php';
                              $vlille_info = getLilleInfo();
                            ?>
                            
                            <table>
                              <tr>
                                <th>Station</th>
                                <th>Commune</th>
                                <th>État</th>
                                <th>Connexion</th>
                                <th>Nombre de vélos disponibles</th>
                                <th>Nombre de places disponibles</th>
                              </tr>
                              
                              <?php foreach($vlille_info as $info): ?>
                                <tr>
                                  <td><?= $info["nom"] ?></td>
                                  <td><?= $info["commune"] ?></td>
                                  <td><?= $info["etat"] ?></td>
                                  <td><?= $info["etatconnexion"] ?></td>
                                  <td><?= $info["nbvelosdispo"] ?></td>
                                  <td><?= $info["nbplacesdispo"] ?></td>
                                </tr>
                              <?php endforeach; ?>
                              
                            </table>

                      </div>
                  </li>
                    
                    <!-- Tableau des stations de roubaix -->
                    <li class="active">
                      <div>                
                      <?php
                            
                              $vlille_info = getVRoubaixInfo();
                            ?>
                                <table>
                                  <thead>
                                    <tr>
                                      <th>Station</th>
                                      <th>Commune</th>
                                      <th>État</th>
                                      <th>Connexion</th>
                                      <th>Nombre de vélos disponibles</th>
                                      <th>Nombre de places disponibles</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($vlille_info as $info): ?>
                                    <tr>
                                      <td><?= $info["nom"] ?></td>
                                      <td><?= $info["commune"] ?></td>
                                      <td><?= $info["etat"] ?></td>
                                      <td><?= $info["etatconnexion"] ?></td>
                                      <td><?= $info["nbvelosdispo"] ?></td>
                                      <td><?= $info["nbplacesdispo"] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>
                      </div>
                    </li>
                    
                    <!-- third category first page -->
                    <li>
                      <div>
                        hello world 3 category;
                      </div>
                    </li>
                    
                    <!-- 4th category 1st page -->
                    <li>
                      <div>
                        hello world 4 category;

                      </div>
                    </li>
                    <!-- 5th category 1st page -->
                    <li>
                      <div>
                        hello world 5 category;

                      </div>
                    </li>

                  
                    
                  </ul>
                  
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about">
            <div class="logo">
              <img src="assets/images/black-logo.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adicingi elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="helpful-links">
            <h4>Helpful Links</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Listing</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Awards</a></li>
                  <li><a href="#">Useful Sites</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-us">
            <h4>Contact Us</h4>
            <p>27th Street of New Town, Digital Villa</p>
            <div class="row">
              <div class="col-lg-6">
                <a href="#">010-020-0340</a>
              </div>
              <div class="col-lg-6">
                <a href="#">090-080-0760</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
            <br>
			Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

    <!-- Scripts -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/animation.js"></script>
      <script src="assets/js/imagesloaded.js"></script>
      <script src="assets/js/custom.js"></script>

</body>
<!-- script php -->


</html>