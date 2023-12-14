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
    <br><br>
    <div>
        <img src="image/fond.jpg" alt="">
    </div>
    <br><br>
    <div class="loyer">
        <img src="image/loyer.jpg" alt="" width="5px">
        <h1>POURQUOI LOUER VOTRE LOGEMENT AVEC MON AGENT IMMOBILIER ® ?</h1>
        <H3>Votre service de location avec Mon Agent Immobilier ® ?</H3>
        <p>Parce qu'il va devenir le vôtre, la villa, maison, appartement avec piscine ou jardin à Dakar - Sénégal que
            vous souhaitez louer ne ressemble à aucun autre. Besoins, aspirations, revenus, situation professionnelle et
            familiale. Autant de paramètres étudiés avec soin et qui permettront a Mon Agent Immobilier® de vous
            proposer une sélection de biens disponibles et une gamme de services personnalisés pour une solution rapide
            et adaptée à votre demande de logement au Sénégal.
        </p>
        <p>Les Huits (8) avantages de louer avec Mon Agent Immobilier® :</p>
        <ul>
            <li>Qualification de votre demande avec mandat de recherche à l'appui.</li>
            <li>Des prestations de recherche de location claires et définies</li>
            <li>Le meilleur choix de produits immobilier du Marché immobilier Sénégalais.</li>
            <li>Négociation du "juste prix" en matière de loyer pour rejoindre votre budget.</li>
            <li>Une qualité de service régulièrement contrôlée par un processus de suivi clients.</li>
            <li>L'Assurance d'une étude juridique de vos contrats avant signature</li>
            <li>Des privilèges négociés en exclusivité pour vous, locataires au près de bailleurs.</li>
            <li>Suivi après location garantie durant tout la durée de votre bail.</li>
        </ul>
        <br><br>
    </div>
    <br><br><br>
    <section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-texte"> <span>I</span>mmobilier à louer au Sénégal : Toutes les annonces</h2>
            <p>Tout l’immobilier à louer au Sénégal est disponible chez seneagenceimmo.sn.
                Vous y trouverez toutes les villas, maisons, appartements à la location de Dakar à la Petite Côte (Saly,
                Somone, Ngaparou…).
                Si vous êtes à la recherche d’un local pour votre activité professionnel, il sera peut-être parmi tous
                les biens ci-dessous.
                Bonne recherche sur seneagenceimmo.sn !</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="image/L1.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Havre Vue sur l'Océan</h3><br>
                    <h3>Prix : 1 200 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L2.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartements Béatitude au Coucher du Soleil</h3>
                    <h3>Prix : 1 500 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L3.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidences des Dunes Dorées</h3>
                    <h3>Prix : 1 800 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L4.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Suites Ville Éternelle</h3>
                    <h3>Prix : 1 350 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L5.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidence Verger de Mangues</h3>
                    <h3>Prix : 1 250 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L6.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Tours Sérénité</h3>
                    <h3>Prix : 1 700 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L7.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidences Crête de Corail</h3>
                    <h3>1 550 000</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L8.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Suites Brise du Lagon</h3>
                    <h3>Prix : 1 900 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L9.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartements Retraite Urbaine</h3>
                    <h3>Prix : 1 100 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L10.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Habitations Élégantes en Altitude</h3>
                    <h3>Prix : 1 750 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L11.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidences Oasis des Palmiers</h3>
                    <h3>Prix : 1 750 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L12.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Maisons Vue sur le Port</h3>
                    <h3>Prix : 2 000 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L13.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Hauteurs Tranquilles</h3>
                    <h3>Prix : 1 600 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L14.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Appartements Champêtre</h3>
                    <h3>Prix : 1 300 000 FCFA / mois</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/L15.jpg" alt="">
                </div>
                <div class="texte">
                    <h3>Résidence Royale</h3>
                    <h3>Prix : 2 000 000 FCFA / mois</h3>
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