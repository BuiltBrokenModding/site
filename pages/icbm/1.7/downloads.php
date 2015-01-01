<?php 
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.php");
    
?>
    <h2>!!Downloads!!</h2>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/file-helper.php");
echo FileHelper::get_text("http://ci.builtbroken.com/maven/icbm/ICBM/downloads.php");
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); 

?>