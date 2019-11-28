<?php
include('assets/front/inc/pdo.php');
include('assets/front/inc/functions.php');?>


<?php
$errors  = array();
$success = false;

if(!empty($_POST['submitVaccin'])) {

  $vaccin  = clean($_POST['nom']);
  $vaccin1 = clean($_POST['vaccin1']);

  $errors = textValid($vaccin, $errors, 'nom',5,50);
  $errors = textValid($vaccin1, $errors, 'vaccin1',5,50);


  if (!empty($errors)) {
    $sql =" INSERT INTO `vaccins` (`nom`,`created_at`)
            VALUES (:nom, NOW())";
    $query = $pdo->prepare($sql);
    $query->bindValue(':nom',$vaccin, PDO::PARAM_STR);
    $query->execute();
  }
}

?>

<?php include('header.php');?>

<?php if(!empty($_SESSION)){

} else {
  header('Location:404.php');
} ?>
?>

<link rel="stylesheet" href="assets/front/css/vaccin.css">


<form class="form-vaccin" action="" method="post">

  <div  class="formV form-vaccin1">
    <label  class="label-vaccin" for="vaccin">Nom de votre vaccin à ajouter :</label>
    <input class="input-vaccin" type="text" id="nom" name="nom" value="<?php if (!empty($_POST['nom'])) {echo $_POST['nom'];} ?>">
    <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom'];} ?>
  </div>

  <div  class="formV form-vaccin2">
    <label  class="label-vaccin" for="vaccin1">Nom de votre second vaccin à ajouter :</label>
    <input class="input-vaccin" type="text" id="vaccin" name="vaccin1" value="<?php if (!empty($_POST['vaccin1'])) {echo $_POST['vaccin1'];} ?>">
    <span class="error"><?php if(!empty($errors['vaccin1'])) {echo $errors['vaccin1'];} ?>
  </div>

  <div class ="form-vaccin-submit">
    <input type="submit" name="submitVaccin" value="Envoyer">
  </div>

</form>



<?php include('footer.php'); ?>
