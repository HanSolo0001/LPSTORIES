<!DOCTYPE html>
<html>
  <head>
    <title>Leah Pugh Stories</title>
    <meta name="description" content="Learn more about Leah, and how she started writing and became an author">
    <meta name="keywords" content="Crystal O'Mally, The Diamond Caper, Anything but a Diamond, Leah, Pugh, About">
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
            <li><a href="index.php">Stories</a></li>
            <li><a href="purchase.php">Purchase</a></li>  
            <li class="active"><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END NAVBAR -->
    <!-- CONTAINER -->  
    <div class="container"> 
      <!-- MAIN BODY CONTENT -->    
        <section>
        <img src="img/Leah.jpg" alt="Photo of Leah Pugh" class="morph profile-photo">
        <div class="about"> 
            <p>An avid reader, Leah started writing stories at a young age. After publishing a few short stories and an article, she had her first novel, <i>The Diamond Caper</i>, published. The first story in the Crystal O'Mally mystery series was followed by the sequel, <i>Anything but a Diamond</i>. Leah enjoys spending time with her family, reading, baking/cooking, and, of course, writing.</p>
        </div>
        </section>
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