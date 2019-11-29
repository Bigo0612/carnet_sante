<?php

include "header.php";
include('assets/front/inc/pdo.php');

if(!empty($_SESSION)){

} else {
  header('Location:404.php');
}
//
$sql ="SELECT * FROM vaccins";
       $query  = $pdo->prepare($sql);
       $query->execute();
       $vaccs = $query->fetchAll();
// ?>

<div class="profil">

  <div class="profilmichel">
    <img class="photofred" src="assets/front/img/frédéricmichel.jpg" alt="photo_de_Frédéric_Michel">
    <p class="profilnom">Frédéric Michel</p>
    <img class="photoforet" src="assets/front/img/montagne.jpg" alt="photo_foret">
  </div>

    <ul class="dropmenu">
        <li><a href="vaccin.php">Ajouter un vaccin</a></li><hr>
        <i class="fas fa-syringe dropvaccins"></i>
        <li><a href="#">Vaccination de voyage</a></li><hr>
        <i class="fas fa-plane dropvoyage"></i>
        <li><a href="#">Se proteger et proteger les autres</a></li><hr>
        <i class="fas fa-heartbeat dropproteger"></i>
        <li><a href="#">Editer mon profil</a></li><hr>
        <i class="far fa-edit dropprofil"></i>
    </ul>
</div>

<div class="boxtableau">

  <table class="tableaucarnet">
    <tr>
      <th class="mainboard">Nom</th>
      <th class="mainboard">Vaccins</th>
      <th class="mainboard">Dates de rappel</th>
      <th class="mainboard">Édition</th>
      <th class="mainboard">Suppr</th>
    </tr>

<?php  foreach($vaccs as $vacc) { ?>
    <tr>
      <td class="ligne1"><?php echo $vacc['nom']; ?></td>
      <td class="ligne1"></td>
      <td class="ligne1"></td>
      <td class="ligne3"><button type="submit" class="btn btn-default"><i class="far fa-edit"></i></button></td>
      <td class="ligne3"><button type="submit" class="btn btn-default"><i  class="fas fa-times" ></i></button></td>
    </tr>

<?php } ?>


  </table>
</div>

<?php include "footer.php";
