$(document).ready(function()
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
});        

function goBack() 
{
    window.history.back()
}    