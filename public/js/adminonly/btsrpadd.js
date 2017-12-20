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

// This is to change the value of the label of the button from ACTIVATE to DEACTIVATE
function disact()
{
    var act = "Are you sure you want to activate this Job?";
    var dis = "Are you sure you want to deactivate this Job?";
    var modc = document.getElementById("mcontent").innerHTML;
    var dstbt = document.getElementById("buttonact").innerHTML;


    if (dstbt != "Disable Job")
    {
        document.getElementById("buttonact").innerHTML = "Disable Job";
        document.getElementById("mcontent").innerHTML = "Are you sure you want to deactivate this Job?";
    }
    else if (dstbt = "Activate Job")
    {
        document.getElementById("buttonact").innerHTML = "Activate Job";
        document.getElementById("mcontent").innerHTML = "Are you sure you want to activate this Job?";
    }
  
}

function savejob()
{
    
}