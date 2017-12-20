 // For The Carousel Slider
 $(document).ready(function()
 {
     //This is the auto slider for the carousel
     $('.slider').slider();

     //This is for the collapse button for mobile display
     $(".button-collapse").sideNav();

     //Feature Discovery
     $('.tap-target').tapTarget('open');

     // Tool Tip
     $('.tooltipped').tooltip({delay: 50});
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