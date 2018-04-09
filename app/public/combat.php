

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png"  alt="" width="200" height="74">
                </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="basepokemon.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <form action="recherche.php" method="get">

                        <input type="text" size="20" name="mdp">
                        <input type="submit" value="OK">

                    </form>
                </ul>
            </div>
        </nav>


    </header>
    <div class="row">
        <div class="col-3">
            <ul class="menu-famille">
                <li><a href="plante.php"class="btn btn-primary">Type Plante</a></li>
                <li><a href="poison.php"class="btn btn-primary">Type Poison</a></li>
                <li><a href="feu.php"class="btn btn-primary">Type Feu</a></li>
                <li><a href="combat.php"class="btn btn-primary">Type Combat</a></li>
                <li><a href="eau.php"class="btn btn-primary">Type Eau</a></li>
                <li><a href="insect.php"class="btn btn-primary">Type Insecte</a></li>
                <li><a href="vol.php"class="btn btn-primary">Type Vol</a></li>
                <li><a href="spectre.php"class="btn btn-primary">Type Spectre</a></li>
                <li><a href="sol.php"class="btn btn-primary">Type Sol</a></li>
                <li><a href="glace.php"class="btn btn-primary">Type Glace</a></li>
                <li><a href="electrik.php"class="btn btn-primary">Type Electrique</a></li>
                <li><a href="psy.php"class="btn btn-primary">Type Psy</a></li>
                <li><a href="roche.php"class="btn btn-primary">Type Roche</a></li>
                <li><a href="dragon.php"class="btn btn-primary">Type Dragon</a></li>
                <li><a href="normal.php"class="btn btn-primary">Type Normal</a></li>
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


            $reponse=$db->query("SELECT * FROM Pokemon WHERE Type1='Combat'OR Type2='Combat'");

            while ($ligne=$reponse->fetch()){


                echo " <!-- Fiche pokemon début -->
            <div class=\"row\">
                <div class=\"col-3\">";
                echo '<img class="img-fluid" src="images/'.$ligne['Numero'].".png".'" />
                        
                </div>
                <div class=\"col-9\">';
                echo "<h4>"."Numéro: ".$ligne['Numero']." ".$ligne['Nom_fr']."/".$ligne['Nom_en'] ." ". '<img class="img-fluid" src="images/'.$ligne['Type1'].".png".'"> <img class="img-fluid" src="images/'.$ligne['Type2'].".png".'"></h4>';

                echo "<p>".$ligne['Description']."</p>
                </div>
            </div>
            <!-- Fiche pokemon fin -->";
            }
            ?>

        </div>
    </div>
    <footer>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio ex iste quo? Dignissimos ea expedita fugit minima nulla tenetur vel. Aliquam asperiores fugit iste iure nam necessitatibus tempore voluptatem?
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>

</body>
</html>