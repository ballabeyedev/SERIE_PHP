<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
    body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    margin: 20px;
}
header {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 1000px;
    margin-left: 100px;
}

header img {
    max-width: 100px;
}

header ul {
    list-style: none;
    display: flex;
}

header li {
    margin-right: 20px;
    cursor: pointer;
    background-color: white;
    color: blue;
    padding: 10px;
}
header li:hover {
    color: black;
}
div {
    margin-top: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    margin-left: 400px;
}

form {
    margin-top: 20px;
    margin-left: 500px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;

}

input[type="submit"]:hover {
    background-color: #0056b3;
}
footer {
    background-color: #f0f0f0;
    padding: 20px;
    display: flex;
    justify-content: space-around;
    text-align: left;
}

footer section {
    margin-right: 20px; 
}

footer a {
    text-decoration: none;
    color: #333;
}

footer a:hover {
    color: #555;
}

footer img {
    width: 30px; 
    margin-right: 10px; 
}

</style>
</head>
<body>
    <header>
        <img src="image/logo.jpg" alt="logo"> seneagenceimmo.sn
        <ul>
            <li>Acceuil</li>
            <li>Localisation</li>
            <li>Parcours</li>
            <li>Contact</li>
        </ul>
    </header>
    <div>
        <p>Bienvenue chez seneagenceimmo.sn ! Fondée en [année de création], 
            notre agence s'engage à concrétiser vos rêves immobiliers. Que vous cherchiez à acheter, 
            vendre ou louer, notre équipe d'experts chevronnés est là pour vous guider à chaque étape. 
            Nous mettons l'accent sur le professionnalisme, l'expertise et une approche centrée sur le client, 
            plaçant vos objectifs au cœur de notre mission.
            Choisir seneagenceimmo.sn signifie opter pour l'excellence et la fiabilité. 
            Nous combinons notre réputation établie avec une utilisation innovante de la technologie pour simplifier vos démarches. 
    </div>
<form action="traitement.php" method="post">
    <input type="submit" name="action" value="Vendre">
    <input type="submit" name="action" value="Acheter">
    <input type="submit" name="action" value="Louer">
</form>
<br><br><br><br>

<footer>
    <section>
    <p>A PROPOS DU SITE</p>
    <a href="">FAQ</a> <br>
    <a href="">Condition d'utilisation</a><br>
    <a href="">Confidentialite</a><br>
    <a href="">Anti-arnaque</a><br>
    </section>
    
    <section>
    <p>CONTACT ET PLAN DU SITE</p><br>
    <a href="">Nous Contacter</a><br>
    <a href="">Plan du site</a><br>
    </section>

    <section>
    <p>MON COMPTE</p>
    <a href="">S'identifier</a><br>
    <a href="">S'inscrire</a><br>
    </section>

    <section>
    <p>SUIVEZ-NOUS SUR</p>
    <a href=""><img src="image/instagram.jpg" alt=""></a>
    <a href=""><img src="image/tiktok.png" alt=""></a>
    <a href=""><img src="image/twitte.png" alt=""></a>
    <a href=""><img src="image/watchapp.jpg" alt=""></a>
    </section>
    
</footer>
</body>
</html>
