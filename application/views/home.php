<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Escape Room hry na Slovensku</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     
     <link href="../../assets/css/carousel.css" rel="stylesheet">
     
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Escape Room hry</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Domov</a></li>
                <li><a href="#about">Čo je Escape Room</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zoznam roomiek <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Akcie</a></li>
                    <li><a href="#">Nové</a></li>
                    <li><a href="#">Všetky</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Kontakt</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div class="container slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="../../assets/images/1.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption">
                  <!--<h1>Akcia 1</h1>
                  <p>Tu bude akcia cislo 1</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="../../assets/images/2.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <!--<h1>Akcia 2</h1>
                  <p>Tu bude akcia cislo 2</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="../../assets/images/3.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <!--<h1>Akcia 3</h1>
                  <p>Tu bude akcia cislo 3</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Predchádzajúca</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Nasledujúca</span>
          </a>
        </div><!-- /.carousel -->
    </div><!-- /.container -->




    <!--<div class="container">
      <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h1>LIVEDOTCOM</h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
               </ul>
               
          </div>
      </div>
    </div>
    <hr/>-->

    <!--<div class="container">
      <div class="row">
          <div class="col-lg-4 col-sm-4 well">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("home/index", $attributes);?>
          <fieldset>
               <legend>Login</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="txt_username" class="control-label">Username</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
               <label for="txt_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>
                              
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
      </div>
    </div>-->
    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row bottom-margin">
          <div class="col-lg-8">
            <div class="col-lg-6">
              <div class="row bottom-margin">
                <div class="col-lg-6">
                  <img class="img-circle" src="../../assets/images/akcie.jpg" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-6">
                  <h2>Akcie</h2>
                </div>
              </div>
              <div class="clearfix">
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-default" href="#" role="button">Viac &raquo;</a></p>
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
              <div class="row bottom-margin">
                <div class="col-lg-6">
                  <img class="img-circle" src="../../assets/images/nove.jpg" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-6">
                  <h2>Nové hry</h2>
                </div>
              </div>
              <div class="clearfix">
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">Viac &raquo;</a></p>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.col-lg-8 -->
          <div class="col-lg-4">
              <?php 
              $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
              echo form_open("home/index", $attributes);?>
              <fieldset>
                   <legend>Prihlásenie</legend>
                   <div class="form-group">
                   <div class="row colbox">
                   <div class="col-lg-4 col-sm-4">
                        <label for="txt_username" class="control-label pull-right">Meno</label>
                   </div>
                   <div class="col-lg-6 col-sm-6">
                        <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                        <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                   </div>
                   </div>
                   </div>
                   
                   <div class="form-group">
                   <div class="row colbox">
                   <div class="col-lg-4 col-sm-4">
                   <label for="txt_password" class="control-label pull-right">Heslo</label>
                   </div>
                   <div class="col-lg-6 col-sm-6">
                        <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                   </div>
                   </div>
                   </div>
                                  
                   <div class="form-group">
                   <div class="col-lg-12 col-sm-12 text-center">
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Prihlásenie" />
                        <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Registrácia" />
                   </div>
                   </div>
              </fieldset>
              <?php echo form_close(); ?>
              <?php echo $this->session->flashdata('msg'); ?>
          </div>
      </div><!-- /.row -->
      
      <!-- Three columns of text below the carousel -->
      <div class="row bottom-margin">
          <div class="col-lg-8">
            <div class="col-lg-6">
              <div class="row bottom-margin">
                <div class="col-lg-6">
                  <img class="img-circle" src="../../assets/images/vsetky.jpg" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-6">
                  <h2>Všetky hry</h2>
                </div>
              </div>
              <div class="clearfix">
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-default" href="#" role="button">Viac &raquo;</a></p>
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
              <div class="row bottom-margin">
                <div class="col-lg-6">
                  <img class="img-circle" src="../../assets/images/co_je_to2.jpg" alt="Generic placeholder image" width="140" height="140">
                </div>
                <div class="col-lg-6">
                  <h2>Čo je Escape Room?</h2>
                </div>
              </div>
              <div class="clearfix">
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">Viac &raquo;</a></p>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.col-lg-8 -->
          <div class="col-lg-4">
              <!-- google adwords --> 
          </div>
      </div><!-- /.row -->
      
      <hr />
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Nahor</a></p>
        <p>&copy; 2016 escape-roomsk.sk &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/jquery-2.2.4.min.js"><\/script>')</script>
    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
    
    <!--load bootstrap.js-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>