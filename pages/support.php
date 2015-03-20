<?php 
    $page_title="ModSupport";
    $title = "Generic Mod Support";
    $sub_title ="for any mod"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/support.mod.php"); ?>
</br>   
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
