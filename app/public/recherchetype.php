

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
                        <a class="nav-link" href="basepokemon.php" style="color: #FFFFFF";>Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informations.php" style="color: #FFFFFF";>Informations</a>
                    </li>

                    <form class="form-inline my-2 my-lg-0" action="recherche.php" method="get" style="margin-left: 350px" >

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

            $type= $_GET['type'];

            $reponse=$db->query("SELECT * FROM Pokemon WHERE Type1 LIKE'$type' OR Type2 LIKE'.$type.'");

            while ($ligne=$reponse->fetch()){


                echo "
<div class='col-9 block-pokemon'>
            <!-- Fiche pokemon début -->
            
            <div class='row'>
                <div class='col-2'>";
                echo '<img class="img-fluid"  src="images/'.$ligne['Numero'].".png".'" />
                        
                </div>
                <div class=col-10>';
                echo "<h4>"."Numéro: ".$ligne['Numero']." ".$ligne['Nom_fr']."/".$ligne['Nom_en'] ." ". '<img class="img-fluid" src="images/'.$ligne['Type1'].".png".'"> <img class="img-fluid" src="images/'.$ligne['Type2'].".png".'"></h4>';

                echo "<p>".$ligne['Description']."</p>
                </div>
            </div>
            </div>
            <!-- Fiche pokemon fin -->";
            }

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