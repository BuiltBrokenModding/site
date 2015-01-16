<?php 
    $page_title="Armory Support";
    $title = "Support";
    $sub_title ="for Armory"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding/Armory/issues?q=')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/support.mod.php"); ?>
</br>   
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
