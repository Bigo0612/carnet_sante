<?php
// FONCTIONS
function clean($value)
{
$valueclean = trim(strip_tags($value));
  return $valueclean;
}
//
function emailValidation($mail, $err, $key)
{
  if(!empty($mail)){
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $err[$key] = 'Email non valide.';
    }
  } else {
    $err[$key] = 'Veuillez renseigner ce champ.';
  }
  return $err;
}
//
function textValid($value, $err, $key, $min, $max,$empty = true)
{
  if(!empty($value)) {
    if (mb_strlen($value) < $min) {
      $err[$key] = 'Veuillez renseigner un message de plus de '.$min.' caractères.';
    } elseif (mb_strlen($value) > $max) {
      $err[$key] = 'Veuillez renseigner un message de moins de '.$max.' caractères.';
    }
  } else {
     if($empty) {
       $err[$key] = 'Veuillez renseigner ce champ.';
     }
   }
  return $err;
}
//


function passwordVerif($value,$value2)
{
return $password = (password_hash($value,PASSWORD_ARGON2ID) == $value2) ? true : false;
}
// FIN Fonctions;
