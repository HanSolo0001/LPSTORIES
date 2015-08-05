/*************************************************************
            Gallery Lightbox On Stories Page
**************************************************************/

//Problem: User when clicking on image goes to a dead end
//Solution: Create an overlay with the large image - Lightbox

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");

// An image to overlay
$overlay.append($image);

// A caption to overlay
$overlay.append($caption);

// Add overlay
$("body").append($overlay);

// Capture the click event on a link to an image
$(".gallery a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  // Update overlay with the image linked in the link
  $image.attr("src", imageLocation);
  
  // Show the overlay.
  $overlay.show();
  
  
  // Get child's alt attribute and set caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
 }); 

// When overlay is clicked
$overlay.click(function(){
  // Hide the overlay
  $overlay.hide();
});

/*************************************************************
            Navbar Opacity After Scrolling
**************************************************************/

var $navbar = $('.navbar');

$(window).scroll(function () {

   if(scrollY <= 0){
       $navbar.animate({
            opacity: 1
       }, 500);
   }
   if(scrollY > 0 && $navbar.is(':not(:animated)')){
       $navbar.animate({
            opacity: .5
       }, 500);
    }
 });

/*************************************************************
            Footer Opacity After Scrolling
**************************************************************/

var $footer = $('#footer');

$(window).scroll(function () {

   if(scrollY <= 0){
       $footer.animate({
            opacity: .7
       }, 500);
   }
   if(scrollY > 0 && $footer.is(':not(:animated)')){
       $footer.animate({
            opacity: 1
       }, 500);
    }
 });
