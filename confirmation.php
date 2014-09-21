<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
function __autoload($name) {
	require('bol/src/bolcom/' . $name . '.php');
}
require_once 'bol/examples/Example.php';
$oProducts = Example::run();

//$oProducts = file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/bol/examples/index.php?action=search&q=barcelona vakantie');
//var_dump(json_decode($oProducts));
?>

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
          <div class="logo">
              <center><img src="img/logo.png" class="img-responsive" /></center>
          </div>
      </div>
    <div class="container marketing">
 <hr class="featurette-divider">
      <!-- Three columns of text below the carousel -->
      <div class="row">
          <?php
          $i=0;
          foreach($oProducts AS $oProduct){
              $i++;
              ?>
          <div class="col-lg-6">
              <img class="img-circle" id="delay-parties" src="<?php echo $oProduct->getThumbnailurl(); ?>" alt="<?php echo $oProduct->getTitle(); ?>" style="width: 140px; height: 140px;">
            <h2 style="height:66px;"><?php echo $oProduct->getTitle(); ?></h2>
            <p><?php echo substr(strip_tags($oProduct->getDescription()),0,200); ?>...</p>
            <strong>&euro;<?php echo $oProduct->getFirstAvailablePrice(); ?></strong><br />
            <a target="_blank" href="<?php echo $oProduct->getExternalurl(); ?>" class="btn btn-primary">buy</a>
          </div><!-- /.col-lg-4 -->
          <?php
          if($i==2)break;
          }
          ?>
       
      </div><!-- /.row -->

    </div>
    <div class="container">
      <hr class="featurette-divider">
      <div class="row">
          <div class="col-xs-12">
              <img src="/img/boardingpass.jpg" class="img-responsive" />
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
