$(document).ready(function() //TODO change this into a function call instead of an on document ready
{ 
    //Generates changelogs
    $( ".changelog li" ).each( 
        function ()
        {
            var t = $(this).html();
            t = t.replace("Removed:","<font color='red'>Removed:</font>");
            t = t.replace("Added:","<font color='#228B22'>Added:</font>");
            t = t.replace("Fixed:","<font color='#228B22'>Fixed:</font>");
            t = t.replace("Changed:","<font color='#FF8C00'>Changed:</font>");
            $(this).html(t);
        }
    );

    !function(d,s,id)
    {
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id))
        {
            js=d.createElement(s);
            js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document, 'script', 'twitter-wjs');   
});        

function goBack() 
{
    window.history.back()
}    