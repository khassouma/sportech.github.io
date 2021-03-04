<! DOCTYPE HTML>
 <html>
    <head>
        <title>Football</title>
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
                                <img src="Images/foot/diapo/1.jpg" class="d-block W-100" >
                            </div>

                            <div class="carousel-item">
                                <img src="Images/foot/diapo/2.jpg" class="d-block W-100">
                            </div>

                           <div class="carousel-item">
                                <img src="Images/foot/diapo/3.jpg" class="d-block W-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/foot/diapo/4.jpg" class="d-block W-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/foot/diapo/5.jpg" class="d-block W-100">
                            </div>

                            <div class="carousel-item">
                                <img src="Images/foot/diapo/6.jpg" class="d-block W-100">
                              </div> 
                       
                    </div>
            </div>
        </header>

        <section id="tabs" class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- <h6 class="section-title h1">Tabs</h6> -->
                    <div>
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Actualité</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ligue 1 Orange</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Statistiques</a>
                                <!-- <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Championnat 3</a> -->
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="champ_detail champ_detail_foot"> 
                                    <br/>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <!-- <h4 class="text-center">Meilleur buteur</h4> -->
                                                    <a href="#"><img src="Images/autres/foot_1_320x300.jpg" class="d-block "></a>
                                                    <hr class="my-4">
                                                    <p> Les vidéos vous permettent de faire passer votre message de façon convaincante.</p>
                                                </div>
                                            </div> 
                                            
                                        </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                 <div class="row">
                                        <div class="col-md-6">
                                            <img src="Images/autres/journée_1.PNG" class="d-block w-100"> 
                                        </div>
                                        <div class="col-md-6">
                                            <img src="Images/autres/journée_1.PNG" class="d-block w-100"> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <img src="Images/autres/journée_1.PNG" class="d-block w-100"> 
                                        </div>
                                        <div class="col-md-6">
                                            <img src="Images/autres/journée_1.PNG" class="d-block w-100"> 
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="champ_detail">
                                    <h3>Meilleurs joueurs du Championnat</h3>
                                    <br/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <h4 class="text-center">Meilleur buteur</h4>
                                                    <img src="Images/autres/foot_1_320x300.jpg" class="d-block w-100">
                                                    <hr class="my-4">
                                                    <ul>
                                                        <li>Nom:</li>
                                                        <li>Prenom:</li>
                                                        <li>Numéro:</li>
                                                        <li>Equipe:</li>
                                                    </ul>
                                                </div>
                                            </div>   

                                            <div class="col-md-6">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <h4 class="text-center">Meilleur ....</h4>
                                                    <img src="Images/autres/foot_1_320x300.jpg" class="d-block w-100 ">
                                                    <hr class="my-4">
                                                    <ul>
                                                        <li>Nom:</li>
                                                        <li>Prenom:</li>
                                                        <li>Numéro:</li>
                                                        <li>Equipe:</li>
                                                    </ul>
                                                </div>
                                            </div>                    
                                        </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                  <div class="champ_detail champ_detail_stat">
                                    <h3>Statistiques Equipes</h3>
                                    <br/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <h4 class="text-center">Match 1</h4>
                                                   <a href="Images/graph/1.png"> <img src="Images/graph/1.png" class="d-block w-100"></a>
                                                    <p> <img src="Images/foot/equipes/blackSarts.png" class="d-block "> </p>
                                                </div>
                                            </div>   

                                             <div class="col-md-6">
                                                <div class="jumbotron" style="background: none; padding-top: 0px;">
                                                <h4 class="text-center">Match 1</h4>
                                                    <a href="Images/graph/1.png"> <img src="Images/graph/1.png" class="d-block w-100"></a>
                                                    <p> <img src="Images/foot/equipes/djoliba.png" class="d-block "> </p>
                                                </div>
                                            </div>                   
                                        </div>
                                    </div> 
                            </div>

                            <!-- <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                4
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column" id="poules" style="background-color: none;">

                    <button class="btn btn-light btn-sm " data-toggle="collapse" data-target="#p_1" ">Match<br/>Ligue 1 Orange </button>
                    <div class="collapse" id="p_1" data-parent="#poules">
                        <div class="row">
                             <div class="col-md-12 vs_">
                                <span class="equipe"><img src="Images/foot/equipes/blackSarts.png" /></span>
                                <span>VS</span>
                                <span  class="equipe"><img src="Images/foot/equipes/11_createur" /></span>
                                <p>11/11/01; 17h00</p>
                             </div>   

                             <div class="col-md-12 vs_">
                                <span  class="equipe"><img src="Images/foot/equipes/djoliba.png" /></span>
                                <span>VS</span>
                                <span  class="equipe"><img src="Images/foot/equipes/yelen.png" /></span>
                                <p>11/11/01; 16h00</p>
                             </div>  
                        </div> 
                    </div>
                    
                    <button class="btn btn-light btn-sm" data-toggle="collapse" data-target="#p_2" ">Classement poule A<br/>Ligue 1 Orange </button>
                    <div class="collapse" id="p_2" data-parent="#poules">
                        <div class="jumbotron" style="background: none">
                            <img src="Images/autres/poules.PNG" class="d-block w-100">
                        </div> 
                    </div>

                    <button class="btn btn-light btn-sm" data-toggle="collapse" data-target="#p_3">Classement Poule B<br/>Ligue 1 Orange</button>
                    <div class="collapse" id="p_3" data-parent="#poules">
                        <div class="jumbotron" style="background: none">
                                <img src="Images/autres/poules.PNG" class="d-block w-100">
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
            sr.reveal('.champ_detail .jumbotron', {
                  origin: 'bottom',
            }, 80)
        </script>
 </html>
