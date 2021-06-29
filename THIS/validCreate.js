function validate() {
    var result = "";

    result += validateEmail();
    result += validateFil();
    result += validateMat();
    result += validatePassword();





    if (result == "") return true;

    alert(result);
    return false;
}



function validatePassword() {
    var password = valueOf("pass");
    var retype = valueOf("password-confirm");

    if (password.length < 6)
        return "\n" +
            "Le mot de passe doit comporter au moins 6 caractères.\n";

    if (password != retype)
        return "Les mots de passe ne correspondent pas.\n";
    return "";
}
function validateMat() {
    var matricule = valueOf("loginid");


    if (matricule.length < 8)
        return "Le matricule doit comporter au moins 8 numéros.\n";

}

function validateFil() {
    var spec = valueOf("spec");


    if (spec.length <= 0)
        return "Veuillez inserer votre specialité.\n";

}

function validateEmail() {
    var email = valueOf("email");


    if (email.indexOf('@') == -1)
        return "L'e-mail doit être une adresse valide.\n";

}
function valueOf(name) {
    return document.getElementsByName(name)[0].value;
}




