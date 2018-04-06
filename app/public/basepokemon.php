

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="//via.placeholder.com/45x45"  alt="">
                </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                </ul>
            </div>
        </nav>


    </header>
    <div class="row">
        <div class="col-3">
            <ul class="menu-famille">
                <li><a href=""class="btn btn-primary">Famille 1</a></li>
                <li><a href=""class="btn btn-primary">Famille 2</a></li>
                <li><a href=""class="btn btn-primary">Famille 3</a></li>
            </ul>
        </div>
        <div class="col-9 block-pokemon">

            <?php
            try{
                $db=new PDO(
                    "mysql:dbname=local;host=localhost",
                    "root",
                    "root"

                );
            }catch(PDOException $exception){
                echo "Erreur:".$exception->getMessage();
            }


            $reponse=$db->query("SELECT * FROM Pokemon");

            while ($ligne=$reponse->fetch()){


              echo " <!-- Fiche pokemon début -->
            <div class=\"row\">
                <div claa=\"col-3\">
                    <img class=\"img-fluid\" src=\"//via.placeholder.com/120x120\">
                </div>
                <div class=\"col-9\">";
                  echo $ligne['nom'];
                    
                 echo "   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto, asperiores blanditiis, commodi deleniti ea error eveniet expedita ipsa modi necessitatibus, odio perferendis quia rem repellendus sint soluta vel voluptate.</p>
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