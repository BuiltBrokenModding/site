<?php 
    $page_title = "VE 1.7";
    $mod_name = "Voltz Engine";
    $mod_sub ="Minecraft Modding Toolkit";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");
    
?>
    <h2>!!Info!!</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <h2>!!Alpha Downloads!!</h2>
    <?php 
        echo FileHelper::get_text("http://ci.builtbroken.com/maven/dev/builtbroken/voltzengine/VoltzEngine/downloads/downloads-1.7.10.php");
    ?>
    </br>
    </br>
     <p>At any time if the download plugin fails you can access the downloads threw our <a href="http://adf.ly/2380428/ci.builtbroken.com/maven/">maven</a> file system.</p>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>