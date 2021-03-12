<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    
</head>

<body>
    <h1>Welcome to Mychat</h1>
    <div id="container">
        <div id="chatbox">
            <div id="chatdata">
            <!-- display message here -->
            </div>
        </div>
    </div>


    <!-- formulaire d'envoi -->
    <form class="login-form">
        <input id="name" type="text" placeholder="Enter Name" required>
        <textarea id="message" placeholder="Enter Message" required></textarea>
        <input id="button" type="submit" value="Send!">
    </form>


    <script src='get_all_message.js'></script>
    <script src='send-message.js'></script>
    
    
</body>
</html>