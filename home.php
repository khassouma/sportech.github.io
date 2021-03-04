<! DOCTYPE HTML>
 <html>
    <head>
        <title>Acceuil</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="Css/style.css">
        <script src="Js/JQuery.js"></script>
        <script src="Js/script.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Images/fontawesome/css/all.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="d-flex flex-column justify-content-md-around">
            <div id="n_bar">
               <?php include ("Inclusion/navbar.php")?>
            </div>
            <div class="container-fluid" id="section_diapo" style="padding-left: 0px;padding-right: 0px;">
                    <div id="diapo_" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000"> 
                            <div class="carousel-item active">
                                <img src="Images/diapo/1.jpg" class="d-block w-100" >
                            </div>

                            <div class="carousel-item">
                                <img src="Images/diapo/2.jpg" class="d-block w-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/diapo/3.jpg" class="d-block w-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/diapo/4.jpg" class="d-block w-100">
                            </div>

                            <!-- <div class="carousel-item">
                                <img src="Images/diapo/5.jpg" class="d-block w-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/diapo/6.jpg" class="d-block w-100">
                            </div> -->
                       
                    </div>

            </div>
        </header>

        <section id="home_section_1" class="container">
           <div class="intro">
                <div class="titre">
                  <h1>Sportech</h1>
                  <h2>Le sport qui nous unit!</h2>  
                </div>

                <div id="presentation">
                    Les vidéos vous permettent de faire passer votre message de façon convaincante. 
                    Quand vous cliquez sur Vidéo en ligne, vous pouvez coller le code incorporé de la vidéo que vous souhaitez ajouter.
                    Vous pouvez également taper un mot-clé pour rechercher en ligne la vidéo qui convient le mieux à votre document.
                    Pour donner un aspect professionnel à votre document, Word offre des conceptions d’en-tête, de pied de page, 
                    de page de garde et de zone de texte qui se complètent mutuellement. Vous pouvez par exemple ajouter une page de garde, 
                    un en-tête et une barre latérale identiques.
                </div>

                <br/>
                <div class="disciplines row">
                    <div class=" disiplines_img disiplines_img_1 col-md-4">
                        <div class="jumbotron">
                                <img src="Images/autres/art_1_320x300.jpg" class="d-block ">
                                <hr class="my-4">
                                <p>Accéder à l'actualité des Arts martiaux aux Mali .</p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="#" role="button">Arts martiaux</a>
                                </p>
                        </div>
                    </div>

                     <div class=" disiplines_img disiplines_img_2 col-md-4">
                        <div class="jumbotron">
                                <img src="Images/autres/foot_1_320x300.jpg" class="d-block ">
                                <hr class="my-4">
                                <p>Accéder à l'actualité du football Malien et aux resultats des matchs.
                                </p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="foot.php" role="button" ><i class="fas fa-futbol"></i> Football</a>
                                </p>
                        </div>
                    </div>

                    <div class=" disiplines_img disiplines_img_3 col-md-4">
                        <div class="jumbotron">
                                <img src="Images/autres/basketball_1_320x300.jpg" class="d-block ">
                                <hr class="my-4">
                                <p>Accéder à l'actualité du Basketball Malien et aux resultats des matchs.</p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="basket.php" role="button"><i class="fas fa-basketball-ball"></i> Basketball</a>
                                </p>
                        </div>
                    </div>
                   
                </div>
           </div>
        </section>    
        <footer>
             <?php include ("Inclusion/footer.php")?>
        </footer>
    </body>
<script src="Js/scrollreveal.min.js"></script>

        <script>
            const sr = ScrollReveal({
                distance: '100px',
                duration: 2000,
                reset: true,
            });
              sr.reveal('.disiplines_img', {
                   origin: 'left',
                delay: 500
            }, 80)
s
        </script>
 </html>
