<?php include "header.php"; ?>


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
    <div class="clear"></div>
      </section>

      <div class="wrap">
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
                <p class="slogan">Car vous avez <span class="slogancolor anim1"><strong>autre chose à penser ... </strong></span> <br/> Nous nous occupons de <span class="slogancolor anim2"><strong>vos piqûres de rappel</strong></span></p>
              <!-- </div> -->
    <!-- ensuite on pose la question et on y répond -->
              <!-- <div class="boxpartenairesraisons"> -->
                <p class="pourquoi">Pourquoi nous faire confiance ?</p>
                <ul class="parceque">
                  <li class="raison un">Confidentialité de vos données</li>
                  <li class="raison deux">Nos partenaires santé</li>
                  <li class="raison trois">Je sais pas quoi écrire</li>
                  <li class="raison quatre">Je sais pas quoi écrire 2</li>
                </ul>
              </div>
            </div>
    <!-- fin de la partie de gauche -->
    <!-- debut box droite ; 4 images-->
            <div class="boxpartenairescontents">
              <div class="contents">
                <div class="content content1">
                  <img class="imgcontent imgcontent1" src="assets/front/img/homme1content.jpg" alt="">
                  <img class="imgcontent imgcontent2" src="assets/front/img/couplecontent.png" alt="">
                </div>
                <div class="content content3">
                  <img class="imgcontent imgcontent3" src="assets/front/img/homme2content.jpg" alt="">
                  <img class="imgcontent imgcontent4" src="assets/front/img/femmecontente.jpg" alt="">
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
  <!-- fin box de droite -->
  <div class="clear"></div>
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
