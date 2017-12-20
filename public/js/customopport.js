// Custom Javascript/JQuery for this view 
            // For The Carousel Slider
            $(document).ready(function()
            {
                // Tap Target :) 
                $('.tap-target').tapTarget('open');
                //This is for the collapse button for mobile display
                $(".button-collapse").sideNav();

            });

            //This is for the anchor element of the JOIN US buttons
            $(document).on('click', '#a', function(event)
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
                    setTimeout(function(){
                        document.getElementById('interactive');
                        document.getElementById('load').style.visibility="hidden";
                        document.getElementById('contents').style.visibility="visible";
                    },1000);
                }
            }

            $(document).ready(function(){
                $('.parallax').parallax();
              });

            //Tooltip!
            $(document).ready(function(){
                $('.tooltipped').tooltip({delay: 50});
              });

              //This is the Jquery Plugin for the modal
$(document).ready(function()
{
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
   
    $('ul.tabs').tabs();
});

$(document).ready(function(){
    $('.modal').modal();
  });
                    
            