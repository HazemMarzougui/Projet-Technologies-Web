

 // Recuperation des elements /// 
let lNameInput = document.getElementById("NomP");
let lNameInputC = document.getElementById("NomC");
let lPrixInput = document.getElementById("prix");
let lQteInput = document.getElementById("quantite");




var letters = /^[A-Za-z]+$/;
var Numbers = /^[0-100]+$/;



function nameValidation() {
    if (lNameInput.value.length < 3) {
      lNameError = " Le nom doit compter au minimum 3 caractères.";
      document.getElementById("nomr").innerHTML = lNameError;
  
      return false;
    }
    if (!lNameInput.value.match(letters)) {
      lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
      // lNameValid2 = false;
      document.getElementById("nomr").innerHTML = lNameError2;
      return false;
    }
    document.getElementById("nomr").innerHTML =
      "<p style='color:green'> Correct </p>";
  
    return true;
  }

function QteValidation(){
   if(lQteInput.value = ""){
    lQteError = "Quantité ne peut pas être vide";
    document.getElementById("qter").innerHTML=lQteError ; 
   
     return false ;
  }else{
    document.getElementById("qter").innerHTML =
      "<p style='color:green'> Correct </p>";
  
    return true;
}
}

  