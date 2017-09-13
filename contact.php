<!DOCTYPE html>
<html>
  <head>
    <title>Leah Pugh Stories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
      <div id="notification">
    Third book coming soon!
    </div>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>      
        <a class="navbar-brand text-muted" href="index.php">Leah Pugh</a>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Stories</a></li>
            <li><a href="purchase.php">Purchase</a></li>  
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END NAVBAR -->
    <!-- CONTAINER -->  
    <div class="container"> 
     <!-- MAIN BODY CONTENT -->   
     <div class="row">   
      <div class="col-sm-6 .col-md-4 .col-md-offset-4 .col-lg-6 .col-lg-offset-6">
       <h3>General Information</h3>
        <p>I am currently working on the third book in the series, and it will be released soon!</p>
      </div>
      <div class="col-sm-6 .col-md-4 .col-md-offset-4 .col-lg-6 .col-lg-offset-6">
       <h3>Contact Details</h3>
        <ul class="contact-info">
         <li class="mail"><a href="mailto:lpstories@yahoo.com"><span id="email"></span></a></li>
         <li class="facebook"><a href="https://www.facebook.com/LeahPughAuthor?fref=ts" target="_blank">Leah Pugh</a></li>
        </ul>
      </div>
     </div> 
      <!-- END MAIN BODY CONTENT --> 
    </div>
    <!-- END CONTAINER -->     
      <!-- FOOTER -->     
      <div id="footer" class="row col-xs-12, col-sm-12, col-md-12, and col-lg-12">
        <a href="https://www.facebook.com/LeahPughAuthor?fref=ts" target="_blank"><img src="img/FB-f-Logo__blue_50.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; <?php $copyYear = 2015; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : ''); ?> 
        LPSTORIES | This website was designed and coded by <a href="mailto:danielh.webdev@gmail.com">Daniel Hildreth</a></p>
      </div>
    <!-- END FOOTER -->     
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>    
  </body>
</html>