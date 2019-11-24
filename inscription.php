<?php

  include "assets/front/inc/Form.php";
  include "assets/front/inc/FormVerif.php";

  $form = new Form;
  $formVerif = new FormVerif;

  $error = array();

  if(isset($_POST['submited'])){
    $nom       = trim(strip_tags($_POST['nom']));
    $prenom    = trim(strip_tags($_POST['prenom']));
    $email     = trim(strip_tags($_POST['email']));
    $email2    = trim(strip_tags($_POST['email2']));
    $password  = trim(strip_tags($_POST['password']));
    $password2 = trim(strip_tags($_POST['password2']));
    $cgu       = trim(strip_tags((!empty($_POST['cgu'])) ? true : false));

    $error['nom']       = $formVerif->errorText($nom, 'nom', 5, 20);
    $error['prenom']    = $formVerif->errorText($prenom, 'prenom', 5, 20);
    $error['email']     = $formVerif->errorEmail($email, 'email', 10, 100);
    $error['email2']    = $formVerif->errorEmail($email2, 'email', 10, 100);
    $error['password']  = $formVerif->errorText($password, 'Mot de passe', 10, 255);
    $error['password2'] = $formVerif->errorText($password2, 'Mot de passe', 10, 255);
    $error['cgu']       = $formVerif->errorCheckBox($cgu, "Veuillez accepter les CGU.");
  }

  include "header.php";


  $form->init("", "post", "form-inscription");
  $form->inputText("nom", "Nom: ", "Entrez votre nom.");
  if(!empty($error['nom'])){$formVerif->printError($error['nom']);};
  $form->inputText("prenom", "Prenom: ", "Entrez votre prenom.");
  if(!empty($error['prenom'])){$formVerif->printError($error['prenom']);};
  $form->inputText("email", "Email: ", "michel.michel@hotmail.fr");
  if(!empty($error['email'])){$formVerif->printError($error['email']);};
  $form->inputText("email2", "Repetez votre Email: ", "");
  if(!empty($error['email2'])){$formVerif->printError($error['email2']);};
  $form->inputPassword("password", "Mot de passe: ", "");
  if(!empty($error['password'])){$formVerif->printError($error['password']);};
  $form->inputPassword("password2", "Repetez votre Mot de passe: ", "");
  if(!empty($error['password2'])){$formVerif->printError($error['password2']);};
  $form->checkBox("cgu", 'Accepter les <a href="#">CGU</a>.');
  if(!empty($error['cgu'])){$formVerif->printError($error['cgu']);};
  $form->inputSubmit("submited");
  $form->end();

  include "footer.php";
