function firstNameCheck() {
    var firstName = document.querySelector("#first_name");
    if (firstName.value.length < 1) {
        firstName.setCustomValidity("You must enter your first name.");
    } else {
        firstName.setCustomValidity("");
    }
}

function lastNameCheck() {
    var lastName = document.querySelector("#last_name");
    if (lastName.value.length < 1) {
        lastName.setCustomValidity("You must enter your last name."); 
    } else {
        lastName.setCustomValidity("");
    }
}

function emailCheck() {
    var email = document.querySelector("#email");
    if (email.value.length < 1) {
        email.setCustomValidity("You must enter your email.");
    } else {
        email.setCustomValidity("");
    }
}

function subjectCheck() {
    var subject = document.querySelector("#subject");
    if (subject.value.length < 1) {
        subject.setCustomValidity("What is your inquery regarding?");
    } else {
        subject.setCustomValidity("");
    }
}


function messageCheck() {
    var message = document.querySelector("#message");
    if (message.value.length === 0) {
        message.setCustomValidity("Remember to write a message.");
    } else {
        message.setCustomValidity("");
    }
}