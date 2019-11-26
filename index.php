<?php include "header.php"; ?>

    <div class="wrap">

    <!-- Debut de la grande section de presentation, à mettre en position relative -->
      <section class="section1">

    <!-- Debut du slider qui viendra en background de section full page  -->
        <section class="slider">
          <div class="flexslider slideheader">
            <ul class="slides">
              <li><img class="imageslider" src="assets/front/img/photopresentation4.jpeg" alt=""></li>
              <li><img class="imageslider" src="assets/front/img/photopresentation6.jpg" alt=""></li>
              <li><img class="imageslider" src="assets/front/img/photopresentation5.jpg" alt=""></li>
            </ul>
          </div>
        </section>
    <!-- Fin du slider qui viendra en background de section full page -->

          <!-- Debut de la présentation, à mettre en position absolue (boxpresentation) box gauche et droite -->

        <div class="wrap2">
          <section class="boxpresentation">
            <div class="boxpresentationtexte">

              <div class="boxpresentationtitle">
                <h2>Gestionnaire de vaccination digitale <br> pour tout le monde.</h2>
              </div>

              <div class="boxpresentationtxt">
                <p>ADN est un site gratuit pour tous les utilisateurs, vous permettant de gérer plus facilement vos vaccins dans votre vie quotidienne. Nous vous offrons l'opportunité de rester à jour dans vos vaccins et ce, <strong>en toute simplicité.</strong> </p>
              </div>

              <div class="boxpresentationliencreation">
                <p><a href="#">Créer un compte</a></p>
              </div>

              <div class="boxpresentationliencompte">
                <p>Vous avez déjà un compte ? <a class="boxpresentationlienconnexion"href="#">Connectez-vous</a></p>
              </div>
            </div>
            <!-- Fin box gauche, penser à rajouter le alt de l'img -->
            <!-- Debut box droite -->
            <div class="boxpresentationimg">
              <img src="assets/front/img/photopresentation.png" alt="">
            </div>

            <!-- Fin box droite -->
          </section>

        </div>
          <!-- Fin de la présentation, box gauche et droite -->
      </div>
      </section>


      <!-- Nous arrivons dans la partie Qui sommes nous ? A mettre en position relative -->
        <section id="qsn" class="sectionqsn">

          <div class="wrap">
            <!-- boxqsn mettre en position absolue  -->
            <div class="boxqsn">

              <div class="boxqsntitle">
                <h2>Qui sommes-nous ?</h2>
              </div>
            <div class=wrapbox>
              <div class="boxqsntxt">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            </div>

      <!-- Fin de la partie qui sommes nous ! -->
          <div class="boxqsnimg">
            <img src="assets/front/img/imgqsn2.png" alt="">
          </div>
        </div>
      <!-- Fin de l'image  -->
        </section>

      <!-- Section vaccination -->
      <section>

        <div class="wrap">
          <h2 id="vaccination" class="h2vaccination">En savoir plus sur la vaccination</h2>
          <div class="bigboxvaccination">

            <div class="boxvaccination">
              <div class="boximage boximage1">
                <a href=""><i class="far fa-calendar-alt"></i>
              </div>
                <h3 class="h3vaccination" >Vaccination saisonniere</h3>
            </a></div>

            <div class="boxvaccination">
              <div class="boximage boximage2">
                <a href=""><i class="fas fa-heartbeat"></i>
              </div>
                <h3 class="h3vaccination" >Se proteger et proteger les autres</h3>
            </a></div>

            <div class="boxvaccination">
              <div class="boximage boximage3">
                <a href=""><i class="fas fa-plane"></i>
              </div>
                <h3 class="h3vaccination">Vaccination de voyage</h3>
            </a></div>

          </div>
        </div>
      </section>
      <div class="wrap">
      <div class="clear"></div>
  <!-- début Section partenaires : avec un background, du texte à gauche et
  et images de gens contents à droite -> position relative-->
        <section class="sectionpartenaire1">
  <!-- début image en background -->
          <img class="backgroundpartenaire1" src="assets/front/img/paysage_mer.jpg" alt="">
  <!-- fin background -->

  <!-- introduction partenaires : à mettre  en absolue; texte à gauce et images gens content droites -->
          <div class="wrap2">
          <section class="partenairesintroduction1">
    <!-- début partie gauche avec en premier le slogan-->
            <div class="boxpartenairesconfiance">
              <div class="boxpartenairesslogan">
                <p class="slogan">Car vous en avez <br/> suffisamment à l'esprit ...</p>
              <!-- </div> -->
    <!-- ensuite on pose la question et on y répond -->
              <!-- <div class="boxpartenairesraisons"> -->
              <div class="pourquoi1"><p class="pourquoi2">On s'occupe de tout :</p></div>
                <ul class="parceque">
                  <li class="raison deux">Des partenaires santé légitimes</li>
                  <li class="raison un">Confidentialité de vos données</li>
                  <li class="raison trois">Vous êtes notifié des vaccins à venir</li>
                  <li class="raison quatre">Sans même devoir y penser</li>
                </ul>
              </div>
            </div>
    <!-- fin de la partie de gauche -->
    <!-- debut box droite ; 4 images-->
            <div class="boxpartenairescontents">
              <img class="imgcontent imgcontent1" src="assets/front/img/homme1content.png" alt="">
              <img class="imgcontent imgcontent2" src="assets/front/img/couplecontent.png" alt="">
              <img class="imgcontent imgcontent3" src="assets/front/img/homme2content.png" alt="">
              <img class="imgcontent imgcontent4" src="assets/front/img/femmecontente.png" alt="">
            </div>
          </section>
          <div class="clear"></div>
        </section>
      </div>
  <!-- fin box de droite -->

  <!-- section partenaires avec liens images  -->
      <div class="wrap">
        <h2 id="partenaire" class="h2vaccination">Nos partenaires</h2>

        <section class=listepartenaires >
            <div class="partenaire gouvsante">
              <a href="#"> <img class="logopartenaires" src="assets/front/img/gouvsante.png" alt=""> </a>
            </div>
            <div class="partenaire croixrouge">
              <a href="#"> <img class="logopartenaires" src="assets/front/img/croixrouge.jpg" alt=""> </a>
            </div>
            <div class="partenaire medecinssansfrontieres">
              <a href="#"> <img class="logopartenaires" src="assets/front/img/MSF.png" alt=""> </a>
            </div>
            <div class="partenaire care">
              <a href="#"> <img class="logopartenaires" src="assets/front/img/care.png" alt=""> </a>
            </div>
            <div class="clear"></div>
        </section>
      </div>
      <!-- Fin section vaccination -->

<?php include "footer.php";
