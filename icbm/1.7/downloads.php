<?php
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");

?>
    <h2>Info</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <p> Currently ICBM is a work in progress and not completed. Expect missing crafting recipes, items, blocks, and features. </p>
    </br>
   <p><a href="http://www.akliz.net/bbm"><img src="../../img/akliz/icbm_sponsored.png" alt="All mods sponsored by Akiliz" border="0" width="50%" height="50%"/></a></p>	
    <p>Sign up for excellent hosting with&nbsp;<a href="http://www.akliz.net/bbm">http://www.akliz.net/bbm</a></p>
    </br>
    <h2>Curse Downloads</h2>
    <iframe src="http://widget.mcf.li/mc-mods/minecraft/225502-icbm?version=1.7.10" width="100%" style="border: none;"></iframe>
    <p> Most of our stable releases are done through curse. So feel free to use the link above to get downloads. </p>
    <h2>Development Downloads</h2>
    <p> These downloads are hot off our build servers with the latest features. Download at your own risk and don't be suprised if they crash. </p>

    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display=''}else{document.getElementById('spoiler') .style.display='none'}">Show/hide</button>
    <div id="spoiler" style="display:none">
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/downloads/dev/ICBM/downloads-1.7.10.php");
    ?>
    </div>
    </br>
    </br>
    <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/php/maven.php");
    ?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>
