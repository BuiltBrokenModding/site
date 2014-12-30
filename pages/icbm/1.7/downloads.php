<?php 
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.php");
    
?>
    <h2>!!Downloads!!</h2>
    
<?php 
$url = "ci.builtbroken.com/maven/";
$local = "ci.builtbroken.com/maven";
$group = "icbm";
$id = "ICBM";
include($_SERVER['DOCUMENT_ROOT'] . "/php/download/maven-viewer.php");
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); 

?>