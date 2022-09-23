<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Vous etes connecté</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
    <video id="background-video" autoplay loop muted>
        <source src="Slash_Reveal.mp4" type="video/mp4">
        </video>
</head>
<style>
        .login-box {
    background: rgba(255,255,255,.3);
    padding: 10px;

    }
    .login-box h2 {
    -webkit-text-fill-color:rgba(0,0,0,.6);
    text-align: left;
    }
    .login-box h3 {
        text-align: center;
    }
</style>
<body>
    <form action="#" method="post">
    <div class="login-box">
        <div class="user-box">
        <input type="number" name="valeur1" id="valeur1" required="">
        <label> Entrez votre première valeur :</label>
        </div>
        <br><br>
        <div class="user-box">
        <input type="number" name="valeur2" id="valeur2" required="">
        <label>Entrez votre deuxième valeur :</label>
        </div>
        <br><br><br><br>
        <h2>
        <input type="radio" name="choix" id="addition" value="1" checked><label for="addition">Addition [+]</label>
        <br><br>
        <input type="radio" name="choix" id="soustraction" value="2"><label for="soustraction">Soustraction [-]</label>
        <br><br>
        <input type="radio" name="choix" id="multiplication" value="3"><label for="multiplication">Multiplication [*]</label>
        <br><br>
        <input type="radio" name="choix" id="division" value="4"><label for="division">Division [/]</label>
        </h2>
        <br><br><br><br>
        <input type="submit" name="envoyer" class="button" value="Calculer">
        <input type="reset" name="reinisialiser" class="button" value="Réinisialiser">
    <h2>
    <?php
        switch($_POST["choix"]){
                case 1 : $resultat = $_POST["valeur1"] + $_POST["valeur2"];
                         break;
                case 2 : $resultat = $_POST["valeur1"] - $_POST["valeur2"];
                         break;
                case 3 : $resultat = $_POST["valeur1"] * $_POST["valeur2"];
                         break;
                case 4 : $resultat = $_POST["valeur1"] / $_POST["valeur2"];
                         break;
            }
        echo $resultat;
        ?>
    </h2>
    </div>
    </form>
</body>
