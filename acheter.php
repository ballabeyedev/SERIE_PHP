<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
        body,
        h1,
        h2,
        p,
        ul,
        li {
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

        img {
            width: 100%;
            height: auto;
        }

        .loyer {
            align-items: flex-start;
            text-align: left;
            margin: 20px;
        }

        .loyer img {
            max-width: 20%;
            height: auto;
            float: right;
            margin-left: 20px;
            margin-top: 20px;
        }

        .loyer h1,
        .loyer h3,
        .loyer p,
        .loyer ul {
            width: 48%;
            margin-bottom: 20px;
        }

        .menu {
            margin-top: -100px;
        }

        .menu .contenu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .menu .contenu .box {
            width: 350px;
            margin: 10px;
            border: 20px solid #fff;
            box-shadow: 20px 15px 35px rgba(0, 0, 0, 0.8);

        }

        .menu .contenu .box .imbox {
            position: relative;
            width: 100%;
            height: 200px;
        }

        .menu .contenu .box .imbox img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu .contenu .box .texte {
            text-align: center;
            font-weight: 300px;
            color: #111;
        }

        .menu .contenu .box .texte h3 {
            font-weight: 400px;

        }

        .titre {
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .titre-texte {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .titre-texte span {
            color: #e44d26;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        .loyer {
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .loyer img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 24px;
            color: #e44d26;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        ul {
            padding: 0;
            margin: 0;
            text-align: left;
        }

        li {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 5px;
            margin-left: 60px;
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
        .property {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            
        }
        .property h3 img p{
            margin-left: 200px;

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
    <br>
    <form action="traitement.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
    <br>
    <div>
        <img src="image/fond.jpg" alt="">
    </div>
    <br><br>
    <div class="loyer">
        <img src="image/acheter.jpg" alt="" width="5px">
        <h1>Comment acheter votre maison chez Mon Agent Immobilier® ?</h1>
        <H3>Comment acheter votre maison chez Mon Agent Immobilier® ?</H3>
        <p>Acheter une villa, maison, appartement ou terrain à Dakar ou au Sénégal, qu'il s'agisse de son habitation
            principale ou secondaire ou encore d'un investissement immobilier locatif, est un acte impliquant qui
            requiert du temps, de l'attention et de réelles connaissances du marché et de l’attente du client. C'est un
            investissement important pour une vie futur ou un legs familial. C'est aussi une nouvelle vie qui commence.
            MON AGENT IMMOBILIER® est à vos côtés, avant, pendant et après votre acquisition de votre bien immobilier au
            Sénégal. C'est pour MON AGENT IMMOBILIER une opportunité de vous guider dans le cadre de la réalisation de
            ce nouveau projet de vie en vous offrant le meilleur service jamais offert par aucune autre agence
            immobilière à Dakar.</p>
        <p>Les avantages d'acheter avec MON AGENT IMMOBILIER :</p>
        <ul>
            <li>Réduction du temps de recherche</li>
            <li>Un très large choix avec les meilleures sélections sur le marché Dakarois et sénégalais.</li>
            <li>La certitude du juste prix, direct propriétaire et non spéculé.</li>
            <li>Une compétence reconnue et avère dans la vente immobilière par ses pairs et Clients</li>
            <li>Une connaissance locale approfondie basée sur un réseautage professionnel.</li>
            <li>Une qualité sous contrôle permanent en assurant le suivi ponctuel durant toute la durée de la demande
            </li>
            <li>Une communication efficace faisant de nous la première agence immobilière sénégalaise sur Internet</li>
            <li>Des privilèges exclusifs tels que le suivi exclusif, recherche documentaires, facilitation notariale,
                conseil en investissement.</li>
        </ul>
        <br><br>
    </div>
    <br><br><br>
    <section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-texte"> <span>I</span>mmobilier à vendre au Sénégal : Toutes les annonces</h2>
            <p>Tout l’immobilier à vendre au Sénégal est disponible chez seneagenceimmo.sn.
                Vous y trouverez toutes les villas, maisons, appartements et terrain à la vente de Dakar à la Petite
                Côte (Saly, Somone, Ngaparou…).
                Si vous êtes à la recherche d’un immobilier pour votre activité professionnel, il sera peut-être parmi
                tous les biens ci-dessous.
                Bonne recherche sur seneagenceimmo.sn !</p>
        </div>
        <div>
        <h2>Propriétés à Acheter</h2>

        <div class="property">
            <h3>Maison Moderne à Ville1</h3>
            <img src="image/M1.jpeg" alt="Maison Moderne à Ville1" style="max-width: 50%;">
            <p>Prix souhaité: $600,000</p>
            <p>Description de la propriété...</p>
        </div>

        <div class="property">
            <h3>Appartement Vue sur la Mer</h3>
            <img src="image/M2.jpeg" alt="Appartement Vue sur la Mer" style="max-width: 50%;">
            <p>Prix souhaité: $800,000</p>
            <p>Description de la propriété...</p>
        </div>

        <div class="property">
            <h3>Villa de Luxe avec Piscine</h3>
            <img src="image/M3.jpeg" alt="Villa de Luxe avec Piscine" style="max-width: 50%;">
            <p>Prix souhaité: $1,200,000</p>
            <p>Description de la propriété...</p>
        </div>

        <div class="property">
            <h3>Studio en Centre-Ville</h3>
            <img src="image/M4.jpeg" alt="Studio en Centre-Ville" style="max-width: 50%;">
            <p>Prix souhaité: $300,000</p>
            <p>Description de la propriété...</p>
        </div>

        <div class="property">
            <h3>Parcelle de Terrain à Proximité de la Plage</h3>
            <img src="image/M5.jpeg" alt="Parcelle de Terrain à Proximité de la Plage" style="max-width: 50%;">
            <p>Prix souhaité: $400,000</p>
            <p>Description de la propriété...</p>
        </div>

        <div class="property">
            <h3>Appartement Loft Urbain</h3>
            <img src="image/M6.jpeg" alt="Appartement Loft Urbain" style="max-width: 50%;">
            <p>Prix souhaité: $700,000</p>
            <p>Description de la propriété...</p>
        </div>

    </div>


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