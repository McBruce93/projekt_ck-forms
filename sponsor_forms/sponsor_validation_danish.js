function firstNameCheck() {
    var firstName = document.querySelector("#first_name");
    if (firstName.value.length < 1) {
        firstName.setCustomValidity("Du skal indtaste dit fornavn.");
    } else {
        firstName.setCustomValidity("");
    }
}

function lastNameCheck() {
    var lastName = document.querySelector("#last_name");
    if (lastName.value.length < 1) {
        lastName.setCustomValidity("Du skal indtaste dit efternavn."); 
    } else {
        lastName.setCustomValidity("");
    }
}

function companyCheck() {
    var company_name = document.querySelector("#company_name");
    if (company_name.value.length < 1) {
        company_name.setCustomValidity("Du skal indtaste dit efternavn."); 
    } else {
        company_name.setCustomValidity("");
    }
}

function emailCheck() {
    var email = document.querySelector("#email");
    if (email.value.length < 1) {
        email.setCustomValidity("Du skal indtaste din email.");
    } else {
        email.setCustomValidity("");
    }
}

function subjectCheck() {
    var subject = document.querySelector("#subject");
    if (subject.value.length < 1) {
        subject.setCustomValidity("Hvad drejer din henvendelse sig om?");
    } else {
        subject.setCustomValidity("");
    }
}


function messageCheck() {
    var message = document.querySelector("#message");
    if (message.value.length === 0) {
        message.setCustomValidity("Du skal huske at skrive en besked.");
    } else {
        message.setCustomValidity("");
    }
}