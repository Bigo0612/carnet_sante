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

function debug($value)
{
echo '<pre>';
print_r($value);
echo '<pre>';
}

function generateToken()
{
  $token = '';
  $chaine = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZé-_èçàè&°+$%*/!&1234567890";
    for ($i=0; $i < 255 ; $i++) {
      $token .= $chaine[rand(0,mb_strlen($chaine))];

    }
      return $token;
}

function isLogged()
{
if(!empty($_SESSION)){
  session_start();
    if(!is_string($_SESSION['id']) && !is_string($_SESSION['nom']) && !is_string($_SESSION['role']) && !is_string($_SESSION['token']) && !filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)){
      header('Location: 404.php');
    }
}
}
// FIN Fonctions;
