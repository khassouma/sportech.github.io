<! DOCTYPE HTML>
 <html>
    <head>
        <title>Contact</title>
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
        </header>
              <section class="contact py-5 bg-light" id="contact">
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <h4>Nous contacter</h4>
		    <hr>
	    </div>
		<div class="col-md-6">
		    <div class="address">
		        
		    <h5>Address:</h5>
		    <ul class="list-unstyled">
		        <li> T-Mobile Customer Relations</li>
		        <li> PO Box 37380</li>
		        <li> Albuquerque, NM 87176-7380</li>
		    </ul>
		    </div>
		    <div class="email">
		    <h5>Email:</h5>
		    <ul class="list-unstyled">
		        <li> info@email.com</li>
		        <li> info@email.com</li>
		    </ul>
		    </div>
		    <div class="phone">
		        <h5>Téléphone:</h5>
		        <ul class="list-unstyled">
		        <li> +91- 8800XXXXXX34</li>
		        <li> +91- 8800XXXXXX34</li>
		    </ul>
		    </div>
		    <hr>
		    <div class="social">
	        <ul class="list-inline list-unstyled"  style="font-size: 30px">
	            <li class="list-inline-item">
	                <a href="#"><i class="fab fa-facebook-square"></i></a>
	            </li>
	            <li class="list-inline-item">
	                <a href="#"><i class="fab fa-twitter-square"></i></a>
	            </li>
	           
	        </ul>
	    </div>
		</div>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-body">
		             <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="Full Name" placeholder="Nom complet" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            <!-- <div class="form-group col-md-6">
                                      
                                      <select id="inputState" class="form-control">
                                        <option selected>Choose ...</option>
                                        <option> New Buyer</option>
                                        <option> Auction</option>
                                        <option> Complaint</option>
                                        <option> Feedback</option>
                                      </select>
                            </div> -->
                            <div class="form-group col-md-12">
                                      <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Ton message"class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="button" class="btn btn-danger">Envoyer</button>
                        </div>
                    </form>
		        </div>
		    </div>
		</div>
	</div>
	
	
</div>
</section>      
        <footer>
             <?php include ("Inclusion/footer.php")?>
        </footer>
    </body>
 </html>
