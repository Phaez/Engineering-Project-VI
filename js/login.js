

var elUsername = document.getElementById("Username");
var elMsg = document.getElementById("user_err");

var elPassword = document.getElementById("Password");
var elPass = document.getElementById("pass_err");

function checkUsername() {
    if (elUsername.value.length < 7){
        elMsg.innerHTML = "Username must be longer than 7 characters";
    }
    else {
        elMsg.innerHTML = ' ';
    }
}

function checkPassword() {
    if (elPassword.value.length < 7){
        elPass.innerHTML = "Password must be longer than 7 characters";
    }
    else {
        elPass.innerHTML = ' ';
    }
}

elUsername.addEventListener('blur', function(){checkUsername()}, false);
elPassword.addEventListener('blur', function(){checkPassword()}, false);


window.addEventListener("load", function(){
    document.getElementById("Username").focus();
}, false); 