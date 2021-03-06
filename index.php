<?php

try{
    $db = new PDO(
        "mysql:dbname=pokemonsite;host=localhost",
        "root",
        ""
    );
}catch (PDOException $exception){
    echo "Erreur : ".$exception->getMessage();
}


$reponse = $db->query("SELECT * FROM pokemon");



?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
   <header>
       <!-- Just an image -->




       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <nav class="navbar navbar-light bg-light">
               <a class="navbar-brand" href="#">
                   <img src="//via.placeholder.com/45x45" alt="" href="/">
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
                <li>
                    <a href="" class="btn btn-primary">Famille 1</a>
                </li>
                <li>
                    <a href="" class="btn btn-primary">Famille 2</a>
                </li>
                <li>
                    <a href="" class="btn btn-primary">Famille 3</a>
                </li>
            </ul>



        </div>
        <div class="col-9">

            <?php
            while ($ligne = $reponse->fetch()){
                echo "<!-- début affiche pokemon-->
            <div class=\"row blocpokemon\">
                <div class=\"col-3\">
                    <img src=\"//via.placeholder.com/150x150\" alt=\"\" class=\"img-fluid\">
                </div>
                <div class=\"col-9\">
                    <h4>" .$ligne['nom']. "</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci assumenda blanditiis dolorum
                        ducimus eveniet ex exercitationem facilis inventore, ipsa maxime mollitia nesciunt officiis
                        praesentium quisquam repellendus suscipit, tempore vero?</p>
                </div>

            </div>
            <!-- fin affiche pokemon-->";
            }
            ?>



        </div>
    </div>

    <footer>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet aperiam debitis eaque esse eveniet officiis
            quod temporibus ullam vel. A ad iste iure magnam nulla numquam possimus quo ratione.</p>
    </footer>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>