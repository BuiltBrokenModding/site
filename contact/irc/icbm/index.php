<?php 
    $page_title="ICBM channel info";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>
    <p>Here is some information about our irc channel for ICBM</p>
    </br>
    </br>
    <p>ICBM</p>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler1') .style.display=='none') {document.getElementById('spoiler1') .style.display=''}else{document.getElementById('spoiler1') .style.display='none'}">Channel Rules</button>
    <div id="spoiler1" style="display:none">
    <p><h2>Channel Rules</h2></p>
    <ol type="1">
      <li>1. Be respectful and kind</li>
      <li>Don't demand anything out of anyone.</li>
      <li>Just be cool, and have a good time.</li>
    </ol>
    </div>
    </br>
    </br>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler2') .style.display=='none') {document.getElementById('spoiler2') .style.display=''}else{document.getElementById('spoiler2') .style.display='none'}">Click here to show channel name.</button>
    <div id="spoiler2" style="display:none">
    <p>ICBM</p>
    <p> This irc channel is located on irc.esper.net. It is mainly used for our ICBM minecraft mod.</p>
    <script async defer data-hostname="irc.esper.net" data-channel="#icbm" data-port="6667" src="https://www.irccloud.com/static/invite.js"></script></script>
    </div>
    </br>
    </br>
    
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
