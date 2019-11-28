<?php include('header.php');?>
<?php if(!empty($_SESSION)){

} else {
  header('Location:404.php');
} ?>

    <div class="wrap">

    <!-- Debut de la grande section de presentation, à mettre en position relative -->
      <section class="dashboard-section1">

    <!-- Debut du slider qui viendra en background de section full page  -->
        <section class="dashboard-slider">
          <div class="flexslider dashboard-slideheader">
            <ul class="slides">
              <li><img class="dashboard-imageslider" src="assets/front/img/photopresentation4.jpeg" alt=""></li>
              <li><img class="dashboard-imageslider" src="assets/front/img/photopresentation6.jpg" alt=""></li>
              <li><img class="dashboard-imageslider" src="assets/front/img/photopresentation5.jpg" alt=""></li>
            </ul>
          </div>
        </section>
    <!-- Fin du slider qui viendra en background de section full page -->

          <!-- Debut de la présentation, à mettre en position absolue (boxpresentation) box gauche et droite -->

        <div class="wrap2">
          <section class="dashboard-boxpresentation">
            <div class="dashboard-boxpresentationtexte">

              <div class="dashboard-boxpresentationtitle">
                <h2>Une vaccination digitale <br> pour tout le monde.</h2>
              </div>
              <div class="dashbord-box-astuce">
                <ul>
                  <li><i class="far fa-check-square"></i><p>Cliquez sur le logo.</p></li>
                  <li><i class="far fa-check-square"></i><p>Renseignez simplement votre nom, prénom et date de naissance.</p></li>
                  <li><i class="far fa-check-square"></i><p>Choississez de créer pour vous ou un membre de votre famille.</p></li>
                  <li><i class="far fa-check-square"></i><p>Vous voila sur votre tableau de bord où vous pouvez vous renseignez sur tous vos vaccins.</p></li>
                  <li><i class="far fa-check-square"></i><p>Toutes vos données resteront strictement privées.</p></li>
                </ul>
              </div>

            </div>
            <!-- Fin box gauche, penser à rajouter le alt de l'img -->
            <!-- Debut box droite -->
            <div class="dashboard-boxpresentationimg">
              <img src="assets/front/img/photopresentation.png" alt="">
            </div>

            <!-- Fin box droite -->
          </section>

        </div>
          <!-- Fin de la présentation, box gauche et droite -->
      </div>
      </section>


    <!-- SCRIPT JS FLEXSLIDER -->
    <script src="assets/front/js/jquery-1.9.1.min.js"></script>
    <script src="assets/front/js/plugins.js"></script>
    <script src="assets/front/js/flowtype.js"></script>
    <script src="assets/front/js/main.js"></script>
    <!-- FIN Script js flexslider -->

    </body>
  </html>
<?php include('footer.php'); ?>
