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
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="image/T1.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Terrain Vue sur Mer</h3><br>
                    <h3>Prix : 10 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T2.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Parcelle Nature Urbaine</h3>
                    <h3>Prix : 8 500 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T3.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Terrain Résidentiel Soleil</h3>
                    <h3>Prix : 12 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T4.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Lotissement Verdoyant</h3>
                    <h3>Prix : 15 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T5.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Terrain Centre-Ville</h3>
                    <h3>Prix : 20 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T6.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartement Moderne en Ville</h3>
                    <h3>Prix : 35 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T7.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Penthouse Vue Panoramique</h3>
                    <h3>Prix : 50 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T8.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartement de Luxe Corniche</h3>
                    <h3>Prix : 40 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T9.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Studio Chic en Centre-Ville</h3>
                    <h3>Prix : 25 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T10.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartement Familial Spacieux</h3>
                    <h3>Prix : 30 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T11.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Villa Prestigieuse avec Piscine</h3>
                    <h3>Prix : 150 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T12.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Maison Traditionnelle Sénégalaise</h3>
                    <h3>Prix : 80 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T13.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidence Haut de Gamme</h3>
                    <h3>120 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T14.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Maison de Campagne Paisible</h3>
                    <h3>Prix : 60 000 000 FCFA</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/T15.jpeg" alt="">
                </div>
                <div class="texte">
                    <h3>Villa Contemporaine avec Jardin</h3>
                    <h3>Prix : 90 000 000 FCFA</h3>
                </div>
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