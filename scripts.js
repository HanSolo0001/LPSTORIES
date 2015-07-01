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
$("#gallery a").click(function(event){
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
  
/********************************************
            Simple Drop Down Menu
********************************************/

//Problem: It looks gross in smaller browser widths and small devices
//Solution: To hide the text links and swap them out with a more appropriate navigation

//Create a select and apend to menu
var $select = $("<select></select>");
$("#menu").append($select);

//Cycle over menu links
$("#menu a").each(function(){
  var $anchor = $(this);
  //Create an option
  var $option = $("<option></option>");

  //Deal with selected options depending on current page
  if($anchor.parent().hasClass("selected")) {
    $option.prop("selected", true);
  }
  //option's value is the href
  $option.val($anchor.attr("href"));
  //option's text is the text of link
  $option.text($anchor.text());
  //append option to select
  $select.append($option);
});

//Bind change listener to the select
$select.change(function(){
  //Go to select's location
  window.location = $select.val();
});


/***************************************************************
Color Scheme that Marcus Parsons Suggested


var styleEl = document.createElement('style');
styleEl.type = 'text/css';
document.getElementsByTagName('head')[0].appendChild(styleEl);
styleEl.appendChild(document.createTextNode('body, #wrapper { background: linear-gradient(to bottom, rgba(195,217,255,1) 0%,rgba(177,200,239,1) 41%,rgba(152,176,217,1) 100%); } #wrapper { max-width: 100%; } header { background: linear-gradient(to bottom, rgba(79,79,79,1) 0%,rgba(14,14,14,1) 100%); border: none; } '));
var notif = document.querySelector('#notification'); 
document.querySelector('header').removeChild(notif);
*******************************************************************/
