<?php

  include "assets/front/inc/Form.php";
  include "assets/front/inc/FormVerif.php";

  $form = new Form;
  $formVerif = new FormVerif;

  include "header.php";

  $form->init("", "post");
  $form->inputText("email", "Email: ", "michel.michel@hotmail.fr");
  if(!empty($error['email'])){$formVerif->printError($error['email']);};
  $form->inputPassword("password", "Mot de passe: ", "");
  if(!empty($error['password'])){$formVerif->printError($error['password']);};
  $form->inputSubmit("submited");
  $form->end();

  include "footer.php";
