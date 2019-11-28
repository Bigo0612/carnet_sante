<?php include "header.php"; ?>

<link rel="stylesheet" href="assets/front/css/profil.css">

<div class="profil">

  <div class="profilmichel">
    <img class="photofred" src="assets/front/img/frédéricmichel.jpg" alt="photo_de_Frédéric_Michel">
    <p class="profilnom">Frédéric Michel</p>
    <img class="photoforet" src="assets/front/img/montagne.jpg" alt="photo_foret">
  </div>

    <ul class="dropmenu">
        <li><a href="#">Mes vaccins</a></li><hr>
        <i class="fas fa-syringe dropvaccins"></i>
        <li><a href="#">Vaccination de voyage</a></li><hr>
        <i class="fas fa-plane dropvoyage"></i>
        <li><a href="#">Se proteger et proteger les autres</a></li><hr>
        <i class="fas fa-heartbeat dropproteger"></i>
        <li><a href="#">Editer mon profil</a></li><hr>
        <i class="far fa-edit dropprofil"></i>
    </ul>
</div>

<?php include "footer.php";
