// Get data
const nameInput = document.querySelector("#name");
const email = document.querySelector("#email");
const message = document.querySelector("#message");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

// validate data 

function validateForm(){

    clear messages();
    let errorFlag = False; 

    if(nameInput.value.length < 1){
        errorNodes[0].innerText = "Name cannot be blank";
        nameInput.classList.add("error-border");
        errorFlag = true; }

    if(!emailIsValid(email.Value)) {
    errorNodes[1].innerText = "invalid email"; 
    email.classList.add("error-border");
        errorFlag = true; }


    if(message.value.length < 1) { 
        errorNodes[2].innerText = "Please enter message"; 
        message.classList.add("error-border");
        errorFlag = true }
    
    if(!errorFlag){
        success.innerText = "Success!";
    }
}
// Clear error / success message

function clearmessages(){
for(let i=0; i < errorNodes.length; i++){
    errorNodes[i].innerText = "";}

    success.innerText = "";
    nameInput.classList.remove("error-border");
    email.classList.remove("error-border");
    message.classList.remove("error-border");
}


// Check if email is valid

function emailIsValid(email){
    let pattern = /\$+@\.\$+/;
    return pattern.test(email); 
}
