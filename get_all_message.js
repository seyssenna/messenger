const url = "http://localhost:8888/simplon/php/chat-application/config/traitement.php";
let chatContainer = document.querySelector('#chatdata');


// function showMessage() 
// {
    fetch(url)
        .then(response => response.json())
        .then((data) => {
            data.forEach(element => {
                // console.log(element);
                chatContainer.insertAdjacentHTML('beforeend', `<span style='color:green'> ${element.user}</span> : <span style='color:red'> ${element.message}</span></br>`)
            });
            i++
            console.log(i);
        })
        .catch((erreur) => {
            console.log(erreur);
        })
        ;
// }
// let i = 0;
// function iteration(){
//     i++;
//     console.log(i);
// }
// setInterval(iteration(), 2000);
