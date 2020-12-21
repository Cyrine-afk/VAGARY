function verif() {
    
    var id= document.querySelector('#id_client').value;  
    var login = document.querySelector('#login_client').value;
    var nom = document.querySelector('#nom_client').value;
    var prenom = document.querySelector('#prenom_client').value;
    var mail =document.querySelector('#mail_client').value;
    var datenai = document.querySelector('#date_nai_client').value;
    var mdp =document.querySelector('#mdp_client').value;
    var mdp2 =document.querySelector('#mdp_client2').value;

    if (id.length != 8) {
      errors += "<li>cheak your id !!</li>";
  }
    if (datenai === "") {
      errors += "<li> the date field is mandatory </li>";
  }
  else {
      var today = new Date();
      datenai = new Date(datenai);
      if (today.getFullYear() - datenai.getFullYear() < 16) {
          errors += "<li>You're not able to  </li>";
      }
  }

  if (mdp !== mdp2 || mdp === "" || mdp === "") {
    errors += "<li> not the same password </li>";
    document.querySelector('#mdp_client').value = "";
    document.querySelector('#mdp_client2').value = "";
    document.querySelector('#mdp_client').focus();
}


}
