// url to the "traitement.php" file
const url = "http://localhost:8888/simplon/php/chat-application/config/traitement.php";

// message container selection
let chatContainer = document.querySelector('#chatdata');

// iterator: just to show on the console if it work 
let i = 0;

// fetch fonction that fetch the "traitement.php" url and display the messages.
function showMessage() 
{
    fetch(url)
        .then(response => response.json())
        .then((data) => {
            // empty the chatbox before display it
            chatContainer.innerHTML="";
            // display each element/message in a <span>
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

// fuction that re-call "showMessage()" every 4 secondes 
setInterval(showMessage, 2000);
