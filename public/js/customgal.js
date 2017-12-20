// Custom Javascript/JQuery for this view 
            // For The Carousel Slider
$(document).ready(function()
{
    //This is for the collapse button for mobile display
    $(".button-collapse").sideNav();
    //Tooltip for the Social media icons found in the footer
    $('.tooltipped').tooltip({delay: 50});
    // Carousel
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    //Parallax
    $('.parallax').parallax();
    //Tap Target
    $('.tap-target').tapTarget('open');

});
//This is for the anchor element of the JOIN US buttons
$(document).on('click', '#upbutton', function(event)
{
    event.preventDefault();

    $('html, body').animate({
         scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 800);
});           
//This is the script for performing the loading screen 
document.onreadystatechange = function () 
{
    var state = document.readyState
    if (state == 'interactive')
    {
        document.getElementById('contents').style.visibility="hidden";
    } 
    else if (state == 'complete') 
    {
        setTimeout(function()
        {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility="hidden";
            document.getElementById('contents').style.visibility="visible";
        },1000);
    }
}
