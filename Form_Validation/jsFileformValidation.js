var message = document.getElementById("message");
var lower = document.getElementById("lower");
var upper = document.getElementById("upper");
var number = document.getElementById("number");
var min = document.getElementById("min");

var password = document.getElementById("password");
var confirmPass = document.getElementById("confirmPass");

var nameValidation = document.getElementById("nameValidation");





password.addEventListener("focus",function(){
    message.style.display="block";
})

password.addEventListener("blur", function () {
    message.style.display = "none";
})

password.addEventListener("keyup", function () {
   var lowercase = /[a-z]/g;

   if(password.value.match(lowercase)){
    lower.classList.add("valid");
       lower.classList.remove("invalid");
   }

   else{
       lower.classList.remove("valid");
       lower.classList.add("invalid");
   }


    var uppercase = /[A-Z]/g;

    if (password.value.match(uppercase)) {
        upper.classList.add("valid");
        upper.classList.remove("invalid");
    }

    else {
        upper.classList.remove("valid");
        upper.classList.add("invalid");
    }


    var numberValid = /[0-9]/g;

    if (password.value.match(numberValid)) {
        number.classList.add("valid");
        number.classList.remove("invalid");
    }

    else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

   

    if (password.value.length >=8) {
        min.classList.add("valid");
        min.classList.remove("invalid");
    }

    else {
        min.classList.remove("valid");
        min.classList.add("invalid");
    }




})

var nameShow = document.getElementById("nameShow");
var nameShowInvalid = document.getElementById("nameShowInvalid");
nameValidation.addEventListener("keyup",function(){
    var nameValidate1 = /[a-z]/g;
    var nameValidate2 = /[A-Z]/g;
    var nameValidateNot = /[0-9]/g;


    if(nameValidation.value.match(nameValidate1)){
        nameShow.style.display="block";
        nameShowInvalid.style.display = "none";
    }


    if (nameValidation.value.match(nameValidate2)) {
        nameShow.style.display = "block";
        nameShowInvalid.style.display = "none";
    }

    if (nameValidation.value.match(nameValidateNot)) {
        nameShowInvalid.style.display = "block";
        nameShow.style.display = "none";

    }
})

nameValidation.addEventListener("blur", function () {
    nameShow.style.display = "none";
    nameShowInvalid.style.display = "none";
})










function showpass(){
   if(password.type == "password"){
       password.type = "text";
   }
   else{
       password.type = "password";
   }
}

function showpassForConfirmPass() {
    if (confirmPass.type == "password") {
        confirmPass.type = "text";
    }
    else {
        confirmPass.type = "password";
    }
}

var checkPassword = document.querySelector(".checkPassword");
var hidePassword = document.querySelector(".hidePassword");

checkPassword.addEventListener("click",function(){
    hidePassword.style.display="block";
    checkPassword.style.display = "none";
})

hidePassword.addEventListener("click", function () {
    hidePassword.style.display = "none";
    checkPassword.style.display = "block";
})



var checkPasswordConfirm= document.querySelector(".checkPasswordConfirm");
var hidePasswordConfirm = document.querySelector(".hidePasswordConfirm");

checkPasswordConfirm.addEventListener("click", function () {
    hidePasswordConfirm.style.display = "block";
    checkPasswordConfirm.style.display = "none";
})

hidePasswordConfirm.addEventListener("click", function () {
   hidePasswordConfirm.style.display = "none";
    checkPasswordConfirm.style.display = "block";
})