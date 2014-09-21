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
          
      </div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--        Logo-->
        <div class="logo">
              <center><img src="img/logo.png" class="img-responsive" /></center>
          </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
            <img src="img/carousel3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#find" role="button">Find your Flirty Bird</a></p>
            </div>
          </div>
        </div>
        <div class="item">
            <img src="img/carousel2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
               <p><a class="btn btn-lg btn-primary" href="#find" role="button">Find your Flirty Bird</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel1.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#find" role="button">Find your Flirty Bird</a></p>

          </div>
        </div>
      </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" id="delay-parties" src="img/testimonial_1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Delay-Party Barcelona</h2>
          <p>The 3 hour delay at Barcelona Airport turned into a great get together. I met really nice people and it was a great start of my holiday.Anne and I still keep in touch.</p>
          <em>-Ross-</em>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" id="download-tag" src="img/testimonial_2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
           <h2>Flirting below the belt</h2>
          <p>When I picked up my luggage Matt spotted my Flirty Bird tag. We shared a cab into town and went for a coffee. It was a great start of my holiday.</p>
          <em>-Lorena-</em>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="img/testimonial_3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Making Friends</h2>
          <p>I like organizing drinks with other Flirty Birds during my vacation. It is a great way to make friends when I'm on vacation.</p>
          <em>-Eve-</em>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div>
    <a name="find"></a>
    <h1 style="text-align: center;"><img src="img/logo_map.png" height="100px" /> </h1>
    <div class="container cDivMapContainer">
        <div class="row">
            <div class="col-md-8">
            <div class="embed-responsive embed-responsive-4by3">
            <div id="map-canvas"></div>
            </div>
            </div>
            
            <div class="cDivFilter col-md-4">
                <label>Pick a departure date</label><br />
                <div class="cDivCalendar"></div><br />
                <label>Price: &euro;<span class="cSpanPriceFrom">100</span> - &euro;<span class="cSpanPriceTo">800</span></label><br />
                <input class="cInputPrice" type="text" value="" data-slider-min="40" data-slider-max="1500" data-slider-step="10">
                <br /><br /><label>Type of journey:</label><br />
                <input type="checkbox" value="quick" id="iCheckQuicky">&nbsp;&nbsp;<label for="iCheckQuicky">Quicky</label><br />
                <input type="checkbox" value="long" id="iCheckLT">&nbsp;&nbsp;<label for="iCheckLT">Long term commitment</label>
            </div>
        </div>
    </div>
    <div class="container">
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p>&copy; 2014 Flirty Bird, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
    <div class="modal fade" id="iModalInfo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-responsive">
                  
                    </table>
                </div>
            
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="iModalDelay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Delay Parties</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td>Flight</td>
                            <td>Destination</td>
                            <td>Original Departure</td>
                            <td>Estimated Departure</td>
                            <td>Flirty Birds</td>
                            <td>Location</td>
                        </tr>
                        <tr>
                            <td>HV6787</td>
                            <td>Barcelona</td>
                            <td>13:45</td>
                            <td>16:00</td>
                            <td>5</td>
                            <td>Meeting Point</td>
                        </tr>
                        <tr>
                            <td>HV6583</td>
                            <td>Istanbul</td>
                            <td>20:20</td>
                            <td>21:20</td>
                            <td>4</td>
                            <td>Meeting Point</td>
                        </tr>
                    </table>
                </div>
            
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <div class="modal fade" id="iModalDownload">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Download Tag</h4>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-primary btn-lg">Download Tag</button>
                </div>
            
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAEFya_ZjQy6Kc9t9gzNG0oLWxz48hlME"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
    
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    <script src="js/default.js"></script>
    
  </body>
</html>
