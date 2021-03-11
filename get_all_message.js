const url = "http://localhost:8888/simplon/php/chat-application/config/traitement.php";
let chatContainer = document.querySelector('#chatdata');

let i = 0;
function showMessage() 
{
    fetch(url)
        .then(response => response.json())
        .then((data) => {
            chatContainer.innerHTML="";
            data.forEach(element => {
                chatContainer.insertAdjacentHTML('beforeend', `<span style='color:green'> ${element.user}</span> : <span style='color:red'> ${element.message}</span></br>`)
            });
            i++
            console.log(i);
        })
        .catch((erreur) => {
            console.log(erreur);
        })
        ;
}

setInterval(showMessage, 4000);
