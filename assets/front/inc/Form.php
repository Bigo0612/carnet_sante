<?php

class Form{

  public function init($action, $method, $classForm = "", $idForm = ""){
    echo '<form id="'.$idForm.'" class="'.$classForm.'" action="'.$action.'" method="'.$method.'">';
  }

  public function end(){
    echo '</form>';
  }

  public function inputText($name, $label, $placeholder, $value = "", $classLabel = "", $classInput = "", $idLabel = "", $idInput=""){
    $input  = '<label id="'.$idLabel.'" class="'.$classLabel.'" for="'.$name.'">'.$label.'</label>';
    $input .= '<input id="'.$idInput.'" class="'.$classInput.'" type="text" name="'.$name.'" value="'.$value.'" placeholder="'.$placeholder.'">';
    echo $input;
  }

  public function inputPassword($name, $label, $classLabel = "", $classInput = "", $idLabel = "", $idInput=""){
    $input  = '<label id="'.$idLabel.'" class="'.$classLabel.'" for="'.$name.'">'.$label.'</label>';
    $input .= '<input id="'.$idInput.'" class="'.$classInput.'" type="password" name="'.$name.'">';
    echo $input;
  }

  public function textArea($name, $label, $placeholder, $classLabel = "", $classInput = "", $value = "", $row = 4, $cols = 40, $idLabel = "", $idTextAera =""){
    $textArea  = '<label id="'.$idLabel.'" class="'.$classLabel.'" for="'.$name.'">'.$label.'</label>';
    $textArea .= '<textarea id="'.$idTextAera.'"name="'.$name.'" rows="'.$row.'" cols="'.$cols.'" placeholder="'.$placeholder.'">'.$value.'</textarea>';
    echo $textArea;
  }

  public function checkBox($name, $text, $classText = "", $value = "yes", $idCheckBox = "", $classCheckBox = "", $idText = ""){
    $checkBox  = '<input id="'.$idCheckBox.'" class="'.$classCheckBox.'" type="checkbox" name="'.$name.'" value="'.$value.'">';
    $checkBox .= '<p id="'.$idText.'" class="'.$classText.'">'.$text.'</p>';
    echo $checkBox;
  }

  public function inputSubmit($name, $value = "Envoyer"){
    echo '<input type="submit" name="'.$name.'" value="'.$value.'">';
  }
}
