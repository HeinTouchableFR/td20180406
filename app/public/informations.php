

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokédex</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #4879AB";>
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png"  alt="" width="200" height="74">
                </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" style="color: #FFFFFF";>Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informations.php" style="color: #FFFFFF";>Informations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jeu.php" style="color: #FFFFFF";>Les Jeux</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0" action="recherche.php" method="get" style="margin-left: 300px" >

                        <input class="form-control mr-sm-2" type="text" size="20" name="search">
                        <input class="btn btn-outline-light my-2 my-sm-0 "type="submit" value="OK">

                    </form>
                </ul>

            </div>
        </nav>

    </header>
    <div class="row">
        <div class="col-3">
            <ul class="menu-famille">
                <form action="recherchetype.php">
                    <div class="form-group">
                        <label for="choixType">Choix du type</label>
                        <select class="form-control" name="type" id="choixType">
                            <option value="Plante">Plante</option>
                            <option value="Eau">Eau</option>
                            <option value="Feu">Feu</option>
                            <option value="Combat">Combat</option>
                            <option value="Dragon">Dragon</option>
                            <option value="Electrik">Electrique</option>
                            <option value="Glace">Glace</option>
                            <option value="insect">Insecte</option>
                            <option value="Normal">Normal</option>
                            <option value="Poison">Poison</option>
                            <option value="Psy">Psy</option>
                            <option value="Roche">Roche</option>
                            <option value="Sol">Sol</option>
                            <option value="Spectre">Spectre</option>
                            <option value="Vol">Vol</option>
                        </select>
                    </div>
                    <button class="btn">Ok</button>
                </form>


            </ul>
        </div>
        <div class="col-9 block-pokemon">

            <?php
            if (isset($_GET['search'])){
                $search=$_GET['search'];
            }

            try{
                $db=new PDO(
                    "mysql:dbname=local;host=localhost",
                    "root",
                    "root",
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")

                );
            }catch(PDOException $exception){
                echo "Erreur:".$exception->getMessage();
            }

            echo "
Pokémon (en japonais ポケモン) est une franchise créée par Satoshi Tajiri en 1996, présente en particulier en jeu vidéo, dans des séries éditées par Nintendo. Selon les statistiques officielles de Nintendo en 2010, les jeux Pokémon se sont vendus à environ 250 millions d’unités.<br><br> Le jeu vidéo Pokémon Rouge et Bleu s’est vendu à plus de 30 millions d’exemplaires, ce qui en fait un record des ventes dans l’histoire du jeu vidéo.<br><br>

La franchise est également exploitée sous forme d’anime, de mangas, et de jeux de cartes à collectionner. <br><br>Dans la série animée homonyme, le personnage principal, Sacha, voyage à travers diverses régions fictives dans le but d’attraper de nouvelles sortes de monstres éponymes, un concept qu’on retrouve également dans les jeux vidéo de la franchise. Pokémon a eu un impact culturel très important dans les pays où il a été introduit, dont le Japon, les États-Unis, le Canada, la France et d'autres pays européens.<br><br>";

            echo "Dans l'univers des Pokémon, les animaux du monde réel n'existent pas (ou très peu). Le monde est peuplé de Pokémon, des créatures qui vivent en harmonie avec les humains, mais possèdent des aptitudes quasiment impossibles pour des animaux du monde réel, telles que cracher du feu, comme Dracaufeu, ou encore générer de grandes quantités d'électricité, comme Magnéti.<br><br> Chaque sorte de Pokémon possède un nom, qui peut à la fois être utilisé pour parler de Pokémon individuels ou de l'ensemble des Pokémon de la même sorte. Certains Pokémon dits « légendaires » sont les seuls représentants de leur sorte et dans les jeux récents sont des entités incarnant une puissance naturelle. <br><br>Dans la série animée, les Pokémon ne peuvent prononcer en règle générale que leur nom, mais il existe quelques cas rares où des Pokémon ont appris un langage humain. Des humains utilisent ces aptitudes dans leurs activités professionnelles : ainsi les Caninos de l'Agent Jenny l'aident à poursuivre les criminels.<br><br>

Certains dressent les Pokémon pour organiser des combats entre eux, transportant généralement les Pokémon dans des Poké balls, des balles compactes où un Pokémon peut être contenu. Ces dresseurs Pokémon voyagent à travers le monde dans le but d'attraper le plus grand nombre de Pokémon, puis éventuellement devenir Maître Pokémon, un titre donné au dresseur ayant battu le maître de la ligue.<br><br> Certains dresseurs enregistrent les informations des Pokémon qu'ils ont capturés ou observés dans un Pokédex, un appareil électronique qui répertorie et affiche les informations sur les différents Pokémon. À partir de l'âge de dix ans, il est possible de commencer son apprentissage de dresseur en recevant une licence de la Ligue Pokémon. <br><br>L'apprentissage consiste à partir capturer des Pokémon dans leurs habitats naturels, puis à les entrainer au combat.

Les matchs Pokémon consistent en combats entre les Pokémon de deux dresseurs, et se terminent quand tous les Pokémon de l'un d'entre eux sont KO. La mort des Pokémon est donc évitée, et les Pokémon peuvent être soignés au Centre Pokémon, un bâtiment où les infirmières guérissent les Pokémon blessés.<br><br> Pour participer à des compétitions, les dresseurs peuvent se déplacer aux différentes Arènes Pokémon où un badge leur est offert s'ils sortent victorieux d'un match contre le champion d'arène. Après avoir gagné tous les badges de la région, un dresseur peut partir au siège de la Ligue Pokémon pour affronter quatre dresseurs d'élite, souvent appelés le « Conseil des 4 ». Ce n'est qu'après avoir battu ces quatre dresseurs que le dresseur peut affronter le Maître de la Ligue.";
            ?>

        </div>
    </div>
    <footer class="blockquote-footer" style="color: #FFFFFF";>
        © 2018 Pokémon. © 1995-2018 Nintendo / Creatures Inc./GAME FREAK inc. Pokémon, Nintendo 3DS, Nintendo DS, Wii, Wii et WiiWare sont des marques de Nintendo. Le logo YouTube est une marque de Google Inc. Les autres marques à leurs propriétaires respectifs.
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>

</body>
</html>