function validate() {
 
    var a = document.getElementById("mdp1").value;
    var b = document.getElementById("mdp2").value;

    if (a!=b) {
        alert("Les mots de passe ne correspondent pas.");
        return false; }
    else {
        // alert("Les mots de passe correspondent.");
        return true; }}