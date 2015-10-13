<?php 
    $page_title = "VE 1.7";
    $mod_name = "Voltz Engine";
    $mod_sub ="Minecraft Modding Toolkit";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");
    
?>
    <h2>!!Info!!</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <h2>!!Alpha Downloads!!</h2>
    
	 <div id="spoiler" style="display:none">
    <?php 
        print(file_get_contents("http://$_SERVER[SERVER_NAME]//downloads/dev/VoltzEngine/downloads-1.7.10.php"));
    ?>
    </div>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
    </br>
    </br>
    <p>At any time if the download plugin fails you can access the downloads threw our <a href="http://adf.ly/2380428/api.dmodoomsirius.me/">maven</a> file system.</p>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>
