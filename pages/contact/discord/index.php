<?php 
    $page_title="Discord info";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>
    <p>Here is some information about our Discord server</p>
    <p>Discord</p>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoilerIC') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
    <div id="spoilerIC" style="display:none">
    <iframe src="https://discordapp.com/widget?id=97599288397275136&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>    </div>
    </br>
    </br>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>