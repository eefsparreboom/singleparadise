<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flirty Bird</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
      	<div class="container">  
		<div class="row">
                	<div class="col-md-2 centered col-md-offset-5">
				<img style="text-align:center" src="/img/logo.png" />
			</div>
		</div>
	</div>

    	<!-- Marketing messaging and featurettes
    	================================================== -->
    	<!-- Wrap the rest of the page in another container to center all the content. -->
	
	

    	<div class="container marketing">

      	<!-- Three columns of text below the carousel -->
      	<div class="row">
        	<div class="col-lg-4">
          		<h2>Personal Information</h2>
          		<p>In the first step you provide your personal information.</p>
        	</div><!-- /.col-lg-4 -->
        	<div class="col-lg-4">
            		<h2>Payment</h2>
          		<p>In the second step you do the payement.</p>
        	</div><!-- /.col-lg-4 -->
        	<div class="col-lg-4">
            		 <h2>Shop</h2>
          		<p>In the last step you can buy some usefull products for your trip.</p>
        	</div><!-- /.col-lg-4 -->
      	</div><!-- /.row -->
	<div class="row">
		<div class="col-md-6 centered col-md-offset-3">
			<h2>Personal information</h2>
			<form role="form">
  				<div class="form-group">
    					<label for="firstname">First name</label>
    					<input type="text" class="form-control" id="firstname" placeholder="please provide first name">
  				</div>
  				<div class="form-group">
    					<label for="lastname">Last name</label>
    					<input type="text" class="form-control" id="lastname" placeholder="please provide last name">
  				</div>
				<div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="please provide address">
                                </div>				
				<div class="radio">
  					<label>
    						<input type="radio" name="gender" id="optionsRadios1" value="option1" checked>
    						male
  					</label>
				</div>
				<div class="radio">
  					<label>
    						<input type="radio" name="gender" id="optionsRadios2" value="option2">
    						female
  					</label>
				</div>
				<div class="form-group">
					<input data-provide="datepicker">
				</div>
				<div class="radio">
                                        <label>
                                                <input type="radio" name="vegetarion" id="veg" value="option1">
                                                vegetarian
                                        </label>
                                </div>
                                <div class="radio">
                                        <label>
                                                <input type="radio" name="vegetarion" id="non-veg" value="option2" checked>
                                                non-vegetarian
                                        </label>
                                </div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
	</div>
    	<a name="find"></a>
    	<div class="container">
      		<hr class="featurette-divider">
      		<!-- /END THE FEATURETTES -->
      		<!-- FOOTER -->
      		<footer>
        		<p>&copy; 2014 Flirty Bird, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      		</footer>
    	</div><!-- /.container --> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAEFya_ZjQy6Kc9t9gzNG0oLWxz48hlME"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
    
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    <script src="js/default.js"></script>
    <script src="js/form.js"></script>
    
  </body>
</html>
