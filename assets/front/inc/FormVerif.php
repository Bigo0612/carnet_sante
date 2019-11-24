<?php

class FormVerif{

  public function errorText($value, $name, $min, $max){
    if(!empty($value)){
      if(mb_strlen($value) < $min || mb_strlen($value) > $max){
        return 'Veuillez renseigner un '.$name.' compris entre '.$min.' et '.$max.' caractères.';
      }
    } else {
       return 'Veuillez renseigner votre '.$name.'.';
    }
  }

  public function errorEmail($value, $name, $min, $max){
    if(!empty($value)){
      if(mb_strlen($value) >= $min || mb_strlen($value) <= $max){
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
          return 'Veuillez renseigner un '.$name.' valide.';
        }
      } else {
        return 'Veuillez renseigner un '.$name.' compris entre '.$min.' et '.$max.' caractères.';
      }
    } else {
       return 'Veuillez renseigner un '.$name.'.';
    }
  }

  public function errorCheckBox($value, $text){
    if(!$value){
      return $text;
    }
  }

  public function printError($text){
    echo '<p style="color: red">'.$text.'</p>';
  }
}
