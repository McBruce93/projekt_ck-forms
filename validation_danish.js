$(function () {
    var requiredCheckboxes = $('.checkbox_group1 :checkbox[required]');
    requiredCheckboxes.change(function () {
        if (requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});
$(function () {
    var requiredCheckboxes = $('.checkbox_group2 :checkbox[required]');
    requiredCheckboxes.change(function () {
        if (requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});

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

function emailCheck() {
    var email = document.querySelector("#email");
    if (email.value.length < 1) {
        email.setCustomValidity("Du skal indtaste din email.");
    } else {
        email.setCustomValidity("");
    }
}

function phoneNumberCheck() {
    var phoneNumber = document.querySelector("#phone_number");
    if (phoneNumber.value.length < 1) {
        phoneNumber.setCustomValidity("Du skal indtaste dit telefon nummer.");
    } else {
        phoneNumber.setCustomValidity("");
    }
}


function aboutCheck() {
    console.log("Halloo??");
    var about = document.querySelector("#about_you");
    if (about.value.length < 1) {
        about.setCustomValidity("Du skal skrive lidt om dig selv.");
    } else {
        about.setCustomValidity("");
    }
}