<?php 
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");
    
?>
    <h2>!!Info!!</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <h2>!!Downloads!!</h2>
    
<?php 
echo FileHelper::get_text("http://ci.builtbroken.com/maven/icbm/ICBM/downloads/downloads-1.7.10.php");
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>