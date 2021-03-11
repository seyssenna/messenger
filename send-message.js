const url = "http://localhost:8888/simplon/php/chat-application/config/traitement.php";
let userName = document.querySelector("#name");
let message = document.querySelector("#message");
let button = document.querySelector("#button");
let form = document.querySelector(".login-form")


// form.addEventListener("submit", (event) => {
//     event.preventDefault();
    
//     fetch(url, {  
//         method: 'POST',  
//         body: JSON.stringify({username: userName.value, msg:  message.value} )
//         // body: JSON.stringify({ query:  {username: userName.value, msg:  message.value} })
//         }
//     );
// })


let formulaire = new FormData()

form.addEventListener("submit", (event) => {
    event.preventDefault();
    formulaire.set("username", userName.value);
    formulaire.set("msg", message.value);
    
    fetch(url, {  
        method: 'POST',  
        body: formulaire
        }
    );
})


