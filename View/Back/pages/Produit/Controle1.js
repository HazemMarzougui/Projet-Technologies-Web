
let lNameInputC = document.getElementById("NomC");

//let QteInput = document.getElementById("quantite");


var letters = /^[A-Za-z]+$/;


function nameValidationC() {
  if (lNameInputC.value.length < 3) {
    lNameErrorC = " Le nom doit compter au minimum 3 caractères.";
    document.getElementById("categorie").innerHTML = lNameErrorC;

    return false;
  }
  if (!lNameInputC.value.match(letters)) {
    lNameErrorC2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
    // lNameValid2 = false;
    document.getElementById("categorie").innerHTML = lNameErrorC2;
    return false;
  }
  document.getElementById("categorie").innerHTML =
    "<p style='color:green'> Correct </p>";

  return true;
}





  