<!DOCTYPE html>
<html>
  <head>
    <title>Leah Pugh Stories</title>   
    <meta name="description" content="Author Leah Pugh is known for her mystery novels and stories. She's the author of The Diamond Caper and Anything but a Diamond in the Crystal O'Mally series">
    <meta name="keywords" content="Crystal O'Mally, The Diamond Caper, Anything but a Diamond, Leah, Pugh, Home">
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
    New website coming soon!
    </div>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>    
        <a class="navbar-brand text-muted" href="index.php">Leah Pugh</a>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Stories</a></li>
            <li><a href="purchase.php">Purchase</a></li>  
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END NAVBAR -->
    <!-- CONTAINER -->  
<div class="container">
    <!-- MAIN BODY CONTENT -->
    <div>
          <h3 class="welcome">Welcome!</h3>
          <p class="welcome-info">My name is Leah Pugh, and I am a passionate author. This site is dedicated to my writing adventures, and here you will find the books that I currently have published. If you wish to purchase my books, then head over to the <a href="purchase.php">Purchase</a> page for a list of vendors who currently sell my books.</p>
    </div>
    <div class="gallery">
          <div class="row">
              <div class="diamondCaper col-sm-6 col-md-6 col-lg-6">
                  <a href="img/The%20Diamond%20Caper.jpg">
                  <img src="img/The%20Diamond%20Caper.jpg" alt="First book in the Crystal O'Mally series."></a>
                  <br>
                  <p>Meet fifteen year old Crystal O'Mally who is drawn to the excitement of mysteries. She gets a chance to unravel a mystery and things don't go as planned. Her father's jewelry store is robbed, a huge diamond goes missing, and her father is on the list of never-ending suspects.</p>
              </div>
              <div class="anythingButADiamond col-sm-6 col-md-6 col-lg-6">
                <a href="img/Anything_But_A_Diamond.jpg">
                <img src="img/Anything_But_A_Diamond.jpg" alt="Second book in the Crystal O'Mally series."></a>
                <br>
                <p>Crystal is back, and things are out of control. A mystery at Lesler's ranch has her captivated. But why? Is it because the ranch is being sabotaged, cowboys are being injured, cows are stampeding out of control, or the fact that jewelry and horses are disappearing? The suspect list is growing, and every cowboy seems to be on it.</p>
              </div>
          </div>   
    </div>
    <a href="#top" id="topPage">Back to top!</a> 
</div>
    <!-- END MAIN BODY CONTENT -->
      <!-- FOOTER -->        
      <div id="footer" class="row col-xs-12, col-sm-12, col-md-12, and col-lg-12">
        <a href="https://www.facebook.com/LeahPughAuthor?fref=ts" target="_blank"><img src="img/FB-f-Logo__blue_50.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; <?php $copyYear = 2015; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : ''); ?> 
        LPSTORIES | This website was designed and coded by <a href="mailto:danielh.webdev@gmail.com">Daniel Hildreth</a></p>
      </div>
      <!-- END FOOTER -->        
    <!-- END CONTAINER -->    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>    
  </body>
</html>