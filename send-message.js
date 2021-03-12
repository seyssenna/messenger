// const url = "http://localhost:8888/simplon/php/chat-application/config/traitement.php";
let userName = document.querySelector("#name");
let message = document.querySelector("#message");
let button = document.querySelector("#button");
let form = document.querySelector(".login-form")

// grab all the form's data into "FormData()" object
let formulaire = new FormData()



// treatment on form submit
form.addEventListener("submit", (event) => {
    // prevent realoading the page
    event.preventDefault();
    // set the key=>value of FormData() object
    formulaire.set("username", userName.value);
    formulaire.set("msg", message.value);
    
    // put the FormData() data in the body
    fetch(url, {  
        method: 'POST',  
        body: formulaire
        }
    )
    .then(response => response.json())
    .then((data) => {
        // empty the inputs after sending a message
        userName.value = "";
        message.value = "";
    })
    
})


