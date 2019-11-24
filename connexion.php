<?php

  include "assets/front/inc/Form.php";
  include "assets/front/inc/FormVerif.php";

  $form = new Form;
  $formVerif = new FormVerif;

  $error = array();

  if(isset($_POST['submited'])){
    $email     = trim(strip_tags($_POST['email']));
    $password  = trim(strip_tags($_POST['password']));

    $error['email']     = $formVerif->errorEmail($email, 'email', 10, 100);
    $error['password']  = $formVerif->errorText($password, 'Mot de passe', 10, 255);
  }

  include "header.php";

  $form->init("", "post", "form-connexion");
  $form->inputText("email", "Email: ", "michel.michel@hotmail.fr");
  if(!empty($error['email'])){$formVerif->printError($error['email']);};
  $form->inputPassword("password", "Mot de passe: ", "");
  if(!empty($error['password'])){$formVerif->printError($error['password']);};
  $form->inputSubmit("submited");
  $form->end();

  include "footer.php";
