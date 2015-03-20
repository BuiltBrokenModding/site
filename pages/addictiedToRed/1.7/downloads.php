<?php 
    $page_title = "ATR MC1.7";
    $title = "Addicted To Red";
    $sub_title ="Red Glowing Power";
     $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");  
    
?>
    <h2>!!Info!!</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <h2>!!Alpha Downloads!!</h2>
    <?php 
        echo FileHelper::get_text("http://ci.builtbroken.com/maven/com/builtbroken/addictedtored/AddictedToRed/downloads/downloads-1.7.10.php");
    ?>
    </br>
    </br>
    <p>At any time if the download plugin fails you can access the downloads threw our <a href="http://adf.ly/2380428/ci.builtbroken.com/maven/">maven</a> file system.</p>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>