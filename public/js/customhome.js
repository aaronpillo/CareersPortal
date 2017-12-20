// Custom Javascript/JQuery for this view 
            // For The Carousel Slider
            $(document).ready(function()
            {
                //This is the auto slider for the carousel
                $('.slider').slider({
                    "height": $(window).height()
                    });

                //This is for the collapse button for mobile display
                $(".button-collapse").sideNav();

            });

            //This is for the anchor element of the Opportunities buttons
            $(document).on('click', '#ScrolltoOp', function(event)
            {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top
                }, 800);
            });

             //This is for the anchor element of the Opportunities buttons
             $(document).on('click', '#ScrolltoCont', function(event)
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