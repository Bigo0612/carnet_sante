
function verifFomInscription(form){

  var nom = form['nom'].value;
  var prenom = form['prenom'].value;
  var email = form['email'].value;

  if(nom.length == 0){
    alert('Veuillez renseigner un nom');
  } else if (nom.length < 5) {
    alert('Le nom doit faire 5 caractères ou plus');
  } else if (nom.length > 20) {
    alert('Le nom doit faire 20 caractères ou moins');
  }

  if(prenom.length == 0){
    alert('Veuillez renseigner un prenom');
  } else if (prenom.length < 5) {
    alert('Le prenom doit faire 5 caractères ou plus');
  } else if (prenom.length > 20) {
    alert('Le prenom doit faire 20 caractères ou moins');
  }

  var verif_email = email.split("@");

  if(verif_email == ""){
    alert("Veuillez renseigner un mail.");
  } else if (verif_email[0] == "") {
    alert("Email invalide");
  } else if (verif_email[1] == "") {
    alert("Email invalide");
  }
}
