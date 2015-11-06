<?php 
    $page_title="Irc info";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>
    <p>Here is some information about our irc channels</p>
    <p>BuiltBrokenModding</p>
     <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
    <div id="spoiler" style="display:none">
    <p>BuiltBrokenModding</p>
    <p> This irc channel is located on irc.esper.net. It is mainly used for our minecraft mods.</p>
    <script async defer data-hostname="irc.esper.net" data-channel="#BuiltBrokenModding" data-port="6667" src="https://www.irccloud.com/static/invite.js"></script>
    </div>
    </br>
    </br>
    <p>ICBM</p>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoilerIC') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
    <div id="spoilerIC" style="display:none">
    <p>ICBM</p>
    <p> This irc channel is located on irc.esper.net. It is mainly used for our ICBM minecraft mod.</p>
    <script async defer data-hostname="irc.esper.net" data-channel="#icbm" data-port="6667" src="https://www.irccloud.com/static/invite.js"></script></script>
    </div>
    </br>
    </br>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>