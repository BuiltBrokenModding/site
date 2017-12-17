<?php 
    $page_title="ICBM Support";
    $title = "Support";
    $sub_title ="for ICBM"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding/ICBM/issues?q=')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/support.mod.php"); ?>
</br>   
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
