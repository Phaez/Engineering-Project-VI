var el;

function charCount(e) {
    var textEntered, charDisplay, counter, lastkey;
    textEntered = document.getElementById('message').value;
    charDisplay = document.getElementById('charactersLeft');

    counter = (180 - (textEntered.length));
    if (counter > 0) {
    charDisplay.innerHTML = 'Characters remaining: ' + counter;
    }
    else {
        charDisplay.innerHTML = 'Do not enter more than 180 characters';
    }
    lastkey = document.getElementById('lastkey');
    lastkey.innerHTML = 'Last key input: ' + String.fromCharCode(e.keyCode);
}
el = document.getElementById('message');
el.addEventListener('keypress', charCount, false);


var elForm;
var firstNameFeedback, lastNameFeedback, emailFeedback, websiteFeedback;
var firstNameInput, lastNameInput, emailInput, websiteInput;


elForm = document.getElementById('request');

firstNameFeedback = document.getElementById('firstNameFeedback');
LastNameFeedback = document.getElementById('lastNameFeedback');
emailFeedback = document.getElementById('emailFeedback');
websiteFeedback = document.getElementById('websiteFeedback');

firstNameInput = document.getElementById("first_name");
LastNameInput = document.getElementById("last_name");
emailInput = document.getElementById("email_address");
websiteInput = document.getElementById("website_input");

function checkFirstName(event){
    if (firstNameInput.value.length < 1) {
        firstNameFeedback.innerHTML = 'You must enter a first name';
        event.preventDefault();
    }
    else {
        firstNameFeedback.innerHTML = ' ';
    }
}

function checkLastName(event){
    if (LastNameInput.value.length < 1) {
        LastNameFeedback.innerHTML = 'You must enter a Last name';
        event.preventDefault();
    }
    else {
        LastNameFeedback.innerHTML = ' ';
    }
}
function checkEmail(event){
    if (emailInput.value.length < 1) {
        emailFeedback.innerHTML = 'You must enter an Email';
        event.preventDefault();
    }
    else {
        emailFeedback.innerHTML = ' ';
    }
}
function checkWebsite(event){
    if (websiteInput.value.length < 1) {
        websiteFeedback.innerHTML = 'You must enter a website address';
        event.preventDefault();
    }
    else {
        websiteFeedback.innerHTML = ' ';
    }
}

elForm.addEventListener('submit', function(event){
    checkFirstName(event);
    checkLastName(event);
    checkEmail(event);
    checkWebsite(event);
}, false);
