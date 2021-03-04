<?php
try
        {
           $bdd = new PDO('mysql:host=localhost;dbname=IWA;charset=utf8', 'root', '');
           $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-static-top">
    <div class="container-fluid">

        <a class="navbar-bran" href="home.php" ><img class="logo_" src="Images/logo/logo.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="home.php">Acceuil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="foot.php">FootBall</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="basket.php">BasketBall </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Art martiaux</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                </ul>
           </div>
</nav>

         

